<div class="modal fade" id="edittag" tabindex="-1" role="dialog" aria-labelledby="addLabelModalLabel" aria-hidden="true">
    {{ method_field('patch')}}
    {{ csrf_field()}}
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">แก้ไขป้ายกำกับ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action = "{{url('tags.update',$tag)}}">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="form-group">
ิ                   <label for="labelName" class="col-form-label">ชื่อป้ายกำกับ</label>
                        <input type="text" class="form-control" id="labelName" name="label_name" value="{{$tag->tag_name}}">
                </div>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                    <button type="submit" value="update" class="btn btn-primary" id= "confirmAdd">บันทึก</button>
                </div>
        </div>
    </div>
</div>
</form>
