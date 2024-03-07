@extends('layouts.default')

<link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
<style>
    .image-preview-container {
        width: 100%;
        margin: 0 auto;
        border-radius: 20px;
    }

    .image-preview-container img {
        width: 100%;
        display: none;
        margin-bottom: 15px;
        margin-left: 42%;
        border: 3px double rgb(0, 0, 0);
    }

    .image-preview-container input {
        display: none;
    }

    .image-preview-container label {
        display: block;
        width: 20%;
        height: 45px;
        margin-left: 40%;
        text-align: center;
        background: #E9DAC1;
        color: #fff;
        font-size: 15px;
        text-transform: Uppercase;
        font-weight: 400;
        border-radius: 5px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;

    }

    #resetbtn {
        display: block;
        width: 20%;
        height: 45px;
        text-align: center;
        margin-left: 40%;
        color: #fff;
        font-size: 15px;
        text-transform: Uppercase;
        font-weight: 400;
        border-radius: 5px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
@section('content')
    <script>
        window.onload = function() {
            // Hide the reset button
            const ele = document.getElementById("resetbtn");
            ele.style.display = 'none';
        };

        const previewImage = (event, imageNumber, uploadLabelId, resetBtnId) => {
            const imageFiles = event.target.files;
            const imageFilesLength = imageFiles.length;

            if (imageFilesLength > 0) {
                const imageSrc = URL.createObjectURL(imageFiles[0]);
                const imagePreviewElement = document.querySelector(`#preview-selected-image-${imageNumber}`);

                imagePreviewElement.src = imageSrc;
                imagePreviewElement.style.display = "block";
                imagePreviewElement.style.width = "170px";
                imagePreviewElement.style.height = "170px";

                const uploadLabel = document.getElementById(uploadLabelId);
                uploadLabel.style.display = 'none';

                const reBtn = document.getElementById(resetBtnId);
                reBtn.style.display = 'block';
            }
        };


        function resetFile(fileInputId, previewImageId, uploadLabelId, resetBtnId) {
            // ล้างค่า input file โดยการเปลี่ยนค่าในไฟล์ input
            document.getElementById(fileInputId).value = null;

            // ล้างค่าตัวอย่างรูปภาพ
            var previewImage = document.getElementById(previewImageId);
            previewImage.src = null;
            previewImage.style.display = 'none';

            // Show the upload label and hide the reset button
            const uploadLabel = document.getElementById(uploadLabelId);
            uploadLabel.style.display = 'flex';

            // Hide the reset button
            const resetBtn = document.getElementById(resetBtnId);
            resetBtn.style.display = 'none';
        }
    </script>
    <div class="container" style="padding-left: 0%;padding-top:5px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10">
                                <h4>เพิ่มผู้ใช้งาน</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('add-student') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="image-preview-container">
                                        <div class="preview">
                                            <img id="preview-selected-image-1" style="border-radius: 50%" />
                                        </div>
                                        <label id="upload" for="file-upload-1">อัพโหลดรูปภาพ</label>
                                        <input type="file" class="form-control select-require" id="file-upload-1"
                                            accept="image/*" onchange="previewImage(event,1,'upload','resetbtn');" />
                                        <button id="resetbtn"
                                            onclick="resetFile('file-upload-1', 'preview-selected-image-1','upload','resetbtn')"
                                            class="btn btn-danger btn-sm">ลบรูปภาพ</button>

                                        <p style="text-align: center; font-size: 9px;color:black"><span
                                                style="color:red;font-size:13px">*</span>ขนาดรูปภาพที่แนะนำ :
                                            400x500 pixels<span style="color:red;font-size:13px">*</span></p>

                                    </div>
                                </div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">ชื่อ</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">นามสกุล</label>
                                    <input type="text" name="surname" class="form-control" required>
                                </div>
                                <div class="col-md-6" style="padding-top:5px;">
                                    <label for="">บทบาท</label>
                                    <input type="text" name="role" class="form-control">
                                </div>
                                <div class="col-md-6" style="padding-top:5px;">
                                    <label for="">สาขา</label>
                                    <input type="text" name="major" class="form-control">
                                </div>
                                <div class="col-md-6" style="padding-top:5px;">
                                    <label for="">อีเมล</label>
                                    <input type="email hidden" name="email" class="form-control" required>
                                </div>
                                <div class="col-md-6" style="padding-top:5px;">
                                    <label for="">รหัสผ่าน</label>
                                    <input type="text" name="password" class="form-control" required>
                                </div>
                            </div>
                            <br>
                            <hr>
                            <div class="form-group" style="text-align:center;">
                                <a href="{{ url('students') }}" class="btn btn-danger float-end">ยกเลิก</a>
                                <button action="{{ url('students') }}" type="submit" class="btn btn-primary">ยืนยัน</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
@endsection
