<form method="POST" action = "{{url('tags.destroy' $item->tag_id )}}" enctype = "multipart/form-data">
    @csrf
    @method('delete')
    <div class="modal fade" id="addtag" tabindex="-1" role="dialog" aria-labelledby="addLabelModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalDelete{{$item->tag_id}}">เพิ่มป้ายกำกับ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">ยืนยันการลบ<b>{{$item->tag_id}}</b>?</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary" id= "confirmAdd">บันทึก</button>
                </div>
        </div>
    </div>
</div>
</form>
