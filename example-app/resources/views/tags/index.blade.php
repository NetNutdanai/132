@extends('layouts.default')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col align-self-start" style ="text-align:start">
                    <div class="h2" style="padding-top: 20px; margin-bottom: 0%">ป้ายกำกับ</div>
                </div>
                <div class="col align-self-end" style ="text-align:right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addtag">เพิ่มป้ายกำกับ</button>

                </div>
            </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-body">
                        <table id = "example1" class= "table" >
                            <thead>
                                <th style="width : 10%; text-align: center">ID</th>
                                <th style="width : 60%; text-align: center">ชื่อ</th>
                                <th style="width : 10%; text-align: center">จัดการ</th>
                            </thead>
                            <tbody>
                                @foreach ($tag as $item)
                                    <tr>
                                        <td>{{ $item->tag_id }}</td>
                                        <td>{{ $item->tag_name }}</td>
                                        <td>
                                            <form method="POST">
                                                @csrf
                                                @method('put')
                                                <a href="#" class ="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                @method('delete')
                                                <a href="#" class ="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('tags.add-modal')
    @include('tags.edit-modal')
    <script>
        window.onload = function() {
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
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function(){
        $('#confirmAdd').click(function(){
            var labelName = $('#labelName').val();

            $.ajax({
                url: {{ url("tags.store") }},
                type: 'POST',
                data: {
                    label_name: labelName,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response){
                    // Handle success, e.g., show a success message or reload the page
                    console.log(response);
                    $('#addModal').modal('hide');
                },
                error: function(xhr){
                    // Handle error
                    console.log(xhr.responseText);
                }
            });
        });
    });
    </script>

@endsection
