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
                                @foreach ($advertisements_all as $key => $advertisement)
                                <tr class="{{ (isset($advertisements) && $advertisements->id == $advertisement->id) ? 'bg-info font-weight-bold' : 'table-primary' }}">
                                        <td><strong>{{ ++$key }}.</strong></td>
                                        <td>{!! ($advertisement->distributor) !!}</td>
                                        <td>{!! ($advertisement->link) !!}</td>
                                        <td>{!! date('d/m/Y',strtotime(date($advertisement->created_at))) !!}</td>
                                        <td class="text-center">
                                            @include('admin.modals.advertisements.delete')
                                            <a class='btn btn-success btn-xs b-r-xs' href="{!! route('advertisements.edit',$advertisement->id) !!}"><i class="far fa-edit"></i> Edit</a>
                                            <a href='#Delete-{{$advertisement->id}}' data-toggle="modal" class="btn btn-danger btn-xs b-r-xs"><i class="far fa-trash-alt"></i> Delete</a>
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
