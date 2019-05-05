<div class="container mt-4">
    <div class="form-group border-0 shadow">
        <div class="card">
            <div class="card-header bg-dark text-white text-center font-weight-bold text-uppercase py-3">
                Danh sách danh mục
            </div>
            <div class="card-body">
                <div class="containe">
                    <div class="form-group">
                        <table class="table table-hover table-responsive-md table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên danh mục</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">Ngày tạo</th>
                                    <th scope="col" class="text-center">Xử lý</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories_all as $key => $category)
                                    <tr class="{{ (isset($categories) && $categories->id == $category->id) ? 'bg-info font-weight-bold' : 'table-primary' }}">
                                        <td><strong>{{ ++$key }}.</strong></td>
                                        <td>{!! ($category->name) !!} </td>
                                        <td>{{ $category->slug }}</td>
                                        <td>{!! date('d/m/Y',strtotime(date($category->created_at))) !!}</td>
                                        <td class="text-center">
                                            @include('admin.modals.categories.delete')
                                            <a class='btn btn-success btn-xs b-r-xs' href="{!! route('categories.edit', $category->slug) !!}"><i class="far fa-edit"></i> Edit</a>
                                            <a href='#Delete-{{$category->slug}}' data-toggle="modal" class="btn btn-danger btn-xs b-r-xs"><i class="far fa-trash-alt"></i> Delete</a>
                                        </td>
                                        @if (count($category->childs))
                                            @foreach ($category->childs as $key_child => $child)
                                                <tr class="table-warning">
                                                    <td class="text-center">{{ $key .".".++$key_child }}</td>
                                                    <td>{!! $child->name !!}</td>
                                                    <td>{{ $child->slug }}</td>
                                                    <td>{!! date('d/m/Y',strtotime(date($child->created_at))) !!}</td>
                                                    <td class="text-center">
                                                        @include('admin.modals.categories.destroy')
                                                        <a class='btn btn-success btn-xs b-r-xs' href="{!! route('categories.edit', $child->slug) !!}"><i class="far fa-edit"></i> Edit</a>
                                                        <a href='#Delete-{{$child->slug}}' data-toggle="modal" class="btn btn-danger btn-xs b-r-xs"><i class="far fa-trash-alt"></i> Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tr>     
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>