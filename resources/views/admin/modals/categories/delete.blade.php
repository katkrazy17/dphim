<div class="modal fade" id="Delete-{{$category->slug}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="dialog">
        <div class="modal-content text-center border border-danger">
            <div class="modal-body">
                <i class="fa fa-times fa-4x animated rotateIn text-danger"></i>
                <div class="row d-flex justify-content-center mt-3">
                    <h3>Bạn có chắc chắn muốn xóa ?</h3>
                </div>
                <div class="row d-flex justify-content-center">
                    <h3 class="text-danger">[ {{ $category->name}} ]</h3>
                </div>
                <div class="form-group d-flex justify-content-center text-secondary">
                    <span><i class="fa fa-quote-left fa-2x text-danger"></i> Thao tác này có thể ảnh hưởng đến các dữ liệu có liên quan và không thể khôi phục được.</span>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                {!! Form::open(['method' => 'Delete', 'route' => ['categories.destroy', $category->slug]]) !!}
                    <button class="btn btn-danger b-r-xs" type="submit">Xóa</button>
                {!! Form::close() !!}
                <button type="button" class="btn btn-outline-dark button botron b-r-xs" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>