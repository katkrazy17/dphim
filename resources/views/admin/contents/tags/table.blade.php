<div class="container mt-4">
    <div class="form-group border-0 shadow">
        <div class="card">
            <div class="card-header bg-dark text-white text-center font-weight-bold text-uppercase py-3">
                Danh sách tags
            </div>
            <div class="card-body">
                <div class="containe">
                    <div class="form-group">
                        <table class="table table-hover table-responsive-md table-striped">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên tag</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">Ngày tạo</th>
                                    <th scope="col" class="text-center">Xử lý</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tags_all as $key => $tag)
                                    <tr class="{{ (isset($tags) && $tags->id == $tag->id) ? 'bg-info font-weight-bold' : '' }}">
                                        <td><strong>{{ ++$key }}.</strong></td>
                                        <td>{!! ($tag->name) !!} </td>
                                        <td>{{ $tag->slug }}</td>
                                        <td>{!! date('d/m/Y',strtotime(date($tag->created_at))) !!}</td>
                                        <td class="text-center">
                                            @include('admin.modals.tags.delete')
                                            <a class='btn btn-success btn-xs b-r-xs' href="{!! route('tags.edit', $tag->slug) !!}"><i class="far fa-edit"></i> Edit</a>
                                            <a href='#Delete-{{$tag->slug}}' data-toggle="modal" class="btn btn-danger btn-xs b-r-xs"><i class="far fa-trash-alt"></i> Delete</a>
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
</div>
