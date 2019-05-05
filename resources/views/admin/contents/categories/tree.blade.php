<h2 class="text-uppercase font-weight-bold"><i class="fas fa-list-alt"></i> Tất cả danh mục
    <div class="dropdown float-right">
        <i class="fas fa-plus-square" data-toggle="dropdown" id="triggerId" data-toggle-second="tooltip"
            title="Thêm danh mục" data-placement="bottom"></i>
        <div class="dropdown-menu border border-info" aria-labelledby="triggerId">
            <a class="dropdown-item text-dark" href="{!! route('categories.index') !!}">Thêm danh mục chính</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-dark" href="{!! route('categories.childs') !!}">Thêm danh mục phụ</a>
        </div>
    </div>
</h2>
<hr>
<ol class="tree-structure">
    @foreach ($categories_all as $key => $category)
        <li>
            @include('admin.modals.categories.delete')
            <span class="num">{{ ++$key }}</span>
            <a href="{!! route('categories.edit', $category->slug) !!}" class="{{ $category->status == null ? 'text-danger' : '' }}">{{ $category->name }} 
                <div class="float-right">
                    <a class="text-success mr-4" href="{!! route('categories.edit', $category->slug) !!}" data-toggle="tooltip"
                        data-placement="bottom" title="Sửa thông tin"><i class="far fa-edit"></i></a>
                    <a class="text-danger" data-toggle="modal" href='#Delete-{{$category->slug}}' data-placement="bottom"
                        title="Xóa dữ liệu"><i class="fas fa-trash-alt"></i></a>
                </div>
            </a>
            @if (count($category->childs))
                <ol>
                    @foreach ($category->childs as $key_child => $child)
                        <li>
                            @include('admin.modals.categories.destroy')
                            <span class="num">{{ $key .".".++$key_child }}</span>
                            <a href="{!! route('categories.edit', $child->slug) !!}" class="{{ (isset($categories) && $categories->id == $child->id) ? 'text-success font-weight-bold' : '' }}">{{ $child->name }}
                                <div class="float-right">
                                    <a class="text-success mr-4" href="{!! route('categories.edit', $child->slug) !!}" data-toggle="tooltip"
                                        data-placement="bottom" title="Sửa thông tin"><i class="far fa-edit"></i></a>
                                    <a class="text-danger" data-toggle="modal" href='#Delete-{{$category->slug}}' data-placement="bottom"
                                        title="Xóa dữ liệu"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ol>
            @endif
        </li>
    @endforeach
</ol>