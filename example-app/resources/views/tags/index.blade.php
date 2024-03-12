@extends('layouts.default')

@section('content')
<div class="container">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut veritatis nihil, sunt consequuntur aliquam eligendi accusamus praesentium quo ullam quaerat harum, explicabo, perferendis doloremque debitis in corrupti numquam? Dicta, minima!</p>
</div>
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
    <table id = "example1" class= "table">
        <thead>
            <th>ID</th>
            <th>ชื่อ</th>
            <th>จัดการ</th>
        </thead>
        <tbody>
            @foreach ($tag as $item)
                <tr>
                    <td>{{ $item->tag_id }}</td>
                    <td>{{ $item->tag_name }}</td>
                    <td>
                        <form method="POST">
                            <a href="#">
                                <i class="fas fa-edit"></i>
                            </a>
                            @csrf
                            @method('DELETE')
                            <button action="" type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
