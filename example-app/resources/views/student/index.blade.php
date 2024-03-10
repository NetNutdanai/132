@extends('layouts.default')

@section('title')

    <!--Style css-->
    <style>
        h1 {
            margin: 0 auto;
            margin-top: 5rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .image-preview-container {
            width: 100%;
            margin: 0 auto;
            border: 1px solid rgba(0, 0, 0, 0.1);
            padding: 3rem;
            border-radius: 20px;
        }

        .image-preview-container img {
            width: 100%;
            display: none;

            margin-bottom: 15px;
        }

        .image-preview-container input {
            display: none;
        }

        .image-preview-container label {
            display: block;
            width: 75%;
            height: 45px;
            margin-left: 12%;
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

        .image-preview-container-second {
            width: 100%;
            margin: 0 auto;
            border: 1px solid rgba(0, 0, 0, 0.1);
            padding: 3rem;
            border-radius: 20px;
        }

        .image-preview-container-second img {
            width: 100%;
            display: none;
            margin-bottom: 30px;
        }


        .image-preview-container-second input {
            display: none;
        }

        .image-preview-container-second label {
            display: block;
            width: 50%;
            height: 45px;
            margin-left: 25%;
            text-align: center;
            background: #E9DAC1;
            color: #fff;
            font-size: 20px;
            text-transform: Uppercase;
            font-weight: 400;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-body {
            background-color: #ffffff;

        }

        #resetbtn,
        #resetbtn2 {
            display: block;
            width: 50%;
            height: 45px;
            margin-left: 25%;
            text-align: center;
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

        .row {
            margin-bottom: 20px;
        }


        .box {
            width: 100%;
            height: 8vh;
            margin-bottom: 15px;
            margin-top: 10px;
            background-color: #ffffff;
        }

        .box input {
            width: 100%;
            height: 80%;
            border-radius: 10px;
            border: solid 1px #242424;
            outline: none;
            padding: 15px;
            font-size: 16px;
            background-color: #ffffff;
        }

        .box select {
            width: 100%;
            height: 80%;
            border-radius: 10px;
            border: solid 1px #242424;
            outline: none;
            padding: 15px;
            font-size: 18px;
            background-color: #ffffff;
        }

        span.select2-selection.select2-selection--single {
            width: 100%;
            height: 80%;
            border-radius: 10px;
            border: solid 1px #242424;
            outline: none;
            padding: 15px;
            font-size: 18px;
            background-color: #ffffff;
        }

        span.select2-selection__arrow {
            margin-top: 13px;
        }


        .box button {
            width: 100%;
            height: 90%;
            border-radius: 10px;
            border: solid 1px #242424;
            outline: none;
            padding: 15px;
            font-size: 18px;
            background-color: #ffffff;
        }

        button.btn.dropdown-toggle.btn-light {
            background-color: #ffffff;
        }

        div.dropdown-menu.show {
            background-color: #ffffff;
        }

        .inner.show {
            background-color: #ffffff;
        }

        .box textarea {
            width: 100%;
            height: 130%;
            border-radius: 10px;
            border: solid 1px #242424;
            outline: none;
            padding: 15px;
            font-size: 17px;
            background-color: #ffffff;
        }

        #ProThai {
            position: absolute;
            width: 190px;
            top: -3px;
            left: 8%;
            margin: 0px;
            background-color: #ffffff;
            padding: 0 10px;
            font-weight: 600;
        }

        #ProEng {
            position: absolute;
            width: 209px;
            top: -3px;
            left: 8%;
            margin: 1px;
            background-color: #ffffff;
            padding: 0 10px;
            font-weight: 600;
        }

        #CompanyF {
            position: absolute;
            width: 64px;
            top: -3px;
            left: 8%;
            margin: 1px;
            background-color: #ffffff;
            padding: 0 10px;
            font-weight: 600;
        }

        #AdvisorF {
            position: absolute;
            width: 140px;
            top: -3px;
            left: 8%;
            margin: 1px;
            background-color: #ffffff;
            padding: 0 10px;
            font-weight: 600;
        }

        #FieldF {
            position: absolute;
            width: 60px;
            top: -3px;
            left: 8%;
            margin: 1px;
            background-color: #ffffff;
            padding: 0 10px;
            font-weight: 600;
        }

        #TypeF {
            position: absolute;
            width: 77px;
            top: -3px;
            left: 4%;
            margin: 0px;
            background-color: #ffffff;
            padding: 0 10px;
            font-weight: 600;
        }

        #DescF {
            position: absolute;
            width: 160px;
            top: -3px;
            left: 4%;
            margin: 0px;
            background-color: #ffffff;
            padding: 0 10px;
            font-weight: 600;
        }


        #pro_advisor,
        #pro_company,
        #pro_field,
        #pro_descript,
        #pro_type {
            width: 100%;
        }

        tbody {
            padding: 0%;
        }

        .edit-icon {
            color: #000000;
            /* สีของ Icon */
            cursor: pointer;
            /* ทำให้เป็น Cursor Pointer เมื่อผู้ใช้เอาเมาส์ไปชี้ที่ Icon */
        }

        #example1 {
            background-color: #ffffff;
            /* เปลี่ยนสีตามที่คุณต้องการ */
        }

        /* เปลี่ยนสีขอบของตาราง */
        #example1 th {
            border-color: #585858;
            border-top-width: 1px;
            border-bottom-width: 1px;
            /* เปลี่ยนสีตามที่คุณต้องการ */
        }


        /* เปลี่ยนสีพื้นหลังของ header ของตาราง */
        #example1 thead {
            background-color: #ffffff;
            /* เปลี่ยนสีตามที่คุณต้องการ */
            color: rgb(0, 0, 0);
            /* เปลี่ยนสีตัวอักษรใน header ตามที่คุณต้องการ */
        }


        /* ปรับสีขอบของ Pagination */
        #example1_paginate .paginate_button {
            border-radius: 20px;
            margin: 0 2px;
            /* กำหนดระยะห่างระหว่างปุ่ม */
        }


        /* ปรับสีของ Text และ Icon */
        #example1_paginate .paginate_button.current,
        #example1_paginate .paginate_button:hover {
            color: #fff;
            /* เปลี่ยนสี Text */
        }

        /* ปรับขนาดของ Text และ Icon */
        #example1_paginate .paginate_button.current,
        #example1_paginate .paginate_button:hover {
            font-size: 14px;
            /* ปรับขนาด Text */
        }

        /* ปรับขนาดของ Dropdown แสดงหน้าที่ */
        #example1_paginate .paginate_button .page-link {
            background-color: rgb(50, 50, 50);
            color: #ffffff;
            font-size: 14px;
            /* ปรับขนาด Text */
        }
    </style>
    <!--Style css-->

@section('content')

    <!--Javascript-->
    <script>
        window.onload = function() {
            // Hide the reset button
            const ele = document.getElementById("resetbtn");
            ele.style.display = 'none';
            // Hide the reset button 2
            const ele2 = document.getElementById("resetbtn2");
            ele2.style.display = 'none';

            $('#example1').DataTable({
                "language": {
                    "search": "ค้นหา : ",
                    "info": "แสดง _START_ ถึง _END_ จากทั้งหมด _TOTAL_ รายการ",
                    "lengthMenu": "แสดง _MENU_ รายการ",
                    "infoEmpty": "ไม่พบรายการ",
                    "infoFiltered": "(กรองจากทั้งหมด _MAX_ รายการ)",
                    "zeroRecords": "ไม่พบรายการที่ตรงกับคำค้น",
                    "paginate": {
                        "first": "หน้าแรก",
                        "last": "หน้าสุดท้าย",
                        "next": "ถัดไป",
                        "previous": "ก่อนหน้า"
                    }
                }
            });

            $(document).ready(function() {
                $('.js-example-basic-single').select2();
                $(".js-example-basic-hide-search").select2({
                    minimumResultsForSearch: Infinity
                });
                $(".js-example-tags").select2({
                    tags: true
                });
            });

            // Wait for the document to be fully loaded
            document.addEventListener("DOMContentLoaded", function() {
                // Add an event listener to the majorButton
                document.getElementById('majorButton').addEventListener('click', function() {
                    // Handle the button click event (you can add your custom logic here)
                    alert('Button Clicked!');
                });
            });

        };


        const previewImage = (event, imageNumber, uploadLabelId, resetBtnId) => {
            const imageFiles = event.target.files;
            const imageFilesLength = imageFiles.length;

            if (imageFilesLength > 0) {
                const imageSrc = URL.createObjectURL(imageFiles[0]);
                const imagePreviewElement = document.querySelector(`#preview-selected-image-${imageNumber}`);

                imagePreviewElement.src = imageSrc;
                imagePreviewElement.style.display = "block";
                if (imageNumber == 1) {
                    imagePreviewElement.style.width = "170px";
                    imagePreviewElement.style.height = "170px";
                } else if (imageNumber == 2) {
                    imagePreviewElement.style.width = "700px";
                    imagePreviewElement.style.height = "150px";
                }

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
    <!--Javascript-->


    <!--DataTable-->
    <br>
    <div class="container">
        <!-- /.card -->
        <div class="card">
            <div class="card-body"
                style="padding-top:20px;padding-left:20px;padding-right:20px;padding-bottom:20px;border-radius:50px">
                <h1 class="card-title" style="font-size:medium">จัดการผู้ใช้งาน</h1>
                <br>
                <hr>
                <table id="example1" class="table">
                    <thead>
                        <tr style="text-align: center">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Major</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $item)
                            <tr>
                                <td style="text-align: center;padding:0px;padding-top:10px">{{ $item->id }}</td>
                                <td style="padding:0px;padding-top:10px;padding-left:10px">{{ $item->name }}</td>
                                <td style="padding:0px;padding-top:10px;padding-left:10px">{{ $item->email }}</td>
                                <td style="text-align: center;padding:0px;padding-top:10px">{{ $item->course }}</td>

                                <td style="text-align: center;padding:0px;padding-top:5px;padding-bottom:5px">
                                    <form method="POST" style="margin-bottom: 0%">
                                        <a href="{{ url('edit-student/' . $item->user_id) }}" class="btn btn-secondary"
                                            style="width:30px;justify-content:center;padding-left:6px;">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button action="{{ url('delete-student/' . $item->user_id) }}" type="submit"
                                            class="btn btn-danger btn-sm" style="height:30px;width:30px">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

    <!--Add Project-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4>
                            เพิ่มโปรเจ็กต์
                        </h4>
                        <hr><br>
                        <!--Form-->
                        <div class="form-body">
                            <!--Row-->
                            <div class="row">
                                <!--Column-->
                                <div class="col-sm-6 col-md-3">
                                    <div class="image-preview-container">
                                        <div class="preview">
                                            <img id="preview-selected-image-1" />
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
                                <div class="col-sm-6 col-md-9">
                                    <div class="image-preview-container-second">
                                        <div class="preview">
                                            <img id="preview-selected-image-2" />
                                        </div>
                                        <label id="upload2" for="file-upload-2">อัพโหลดรูปภาพ</label>
                                        <input type="file" class="form-control select-require" id="file-upload-2"
                                            accept="image/*" onchange="previewImage(event,2,'upload2','resetbtn2');" />
                                        <button id="resetbtn2"
                                            onclick="resetFile('file-upload-2', 'preview-selected-image-2','upload2','resetbtn2')"
                                            class="btn btn-danger btn-sm">ลบรูปภาพ</button>
                                        <p style="text-align: center; font-size: 12px;color:black"><span
                                                style="color:red;font-size:17px">*</span>ขนาดรูปภาพที่แนะนำ :
                                            400x500 pixels<span style="color:red;font-size:17px">*</span></p>
                                    </div>
                                </div>
                                <!--Column-->
                            </div>
                            <!--Row-->
                            <hr><br>
                            <!--Row-->
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="box form-group" name="boxproject">
                                        <input type="text" name="pro_th" id="pro_th">
                                        <p id="ProThai">ชื่อโปรเจกต์(ภาษาไทย)</p>
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <div class="box" name="boxproject">
                                        <input type="text" class="form-control select-require" name="pro_th"
                                            id="pro_en">
                                        <p id="ProEng">ชื่อโปรเจกต์(ภาษาอังกฤษ)</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="box">
                                        <select class="js-example-basic-single" name="company" id="pro_company">
                                            <option value="" disabled selected>-</option>
                                            <option value="1">TTT Brother</option>
                                            <option value="2">ClickNext</option>
                                            <option value="3">อสมท.</option>
                                            <option value="4">บริษัท กรีนฮับ จำกัด</option>
                                            <option value="5">สำนักงานกองทุนสนับสนุนการสร้างเสริมสุขภาพ (สสส.)
                                            </option>
                                            <option value="6">Soft Square International Co,Ltd</option>
                                            <option value="7">บริษัท สยาม เด็นโซ่ แมนูแฟคเจอริ่ง จำกัด</option>
                                        </select>
                                        <p id="CompanyF">บริษัท</p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="box">
                                        <select class="js-example-basic-hide-search" name="advisor" id="pro_advisor">
                                            <option value="" disabled selected>-</option>
                                            <option value="1">อาจารย์จิรายุส อาบกิ่ง</option>
                                            <option value="2">อาจารย์อภิสิทธิ์ แสงใส</option>
                                            <option value="3">อาจารย์วันทนา ศรีสมบูรณ์</option>
                                            <option value="4">ดร.อธิตา อ่อนเอื้อน</option>
                                            <option value="5">ดร.ณัฐพร ภักดี</option>
                                            <option value="6">อาจารย์พีระศักดิ์ เพียรประสิทธิ์</option>
                                        </select>
                                        <p id="AdvisorF">อาจารย์ที่ปรึกษา</p>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="box">
                                        <select class="js-example-basic-hide-search custom-select-with-button"
                                            name="major" id="pro_major">
                                            <option value="" disabled selected>-</option>
                                            <option value="1">SE</option>
                                            <option value="2">AI</option>
                                            <option value="3">CS</option>
                                            <option value="4">IT</option>
                                        </select>
                                        <p id="FieldF">สาขา</p>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="box">
                                        <select class="js-example-tags" multiple="multiple" name="tag" id="pro_type">
                                            <option value="" disabled selected>-</option>
                                            <option value="1">Management</option>
                                            <option value="2">Sale</option>
                                            <option value="3">CS</option>
                                            <option value="4">IT</option>
                                        </select>
                                        <p id="TypeF">ประเภท</p>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="box">
                                        <textarea id="pro_descript" rows="3" maxlength="250"></textarea>
                                        <p id="DescF">คำอธิบายโปรเจกต์</p>
                                    </div>

                                </div>

                            </div>
                            <!--Row-->
                            <hr><br>
                        </div>
                        <!--Form-->

                        <div class="row">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
