@extends('admin.layouts.master') 
@section('title','Quản lý đạo diễn') 
@section('page-heading')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-8">
            <h2 class="text-uppercase font-weight-bold">Danh mục đạo diễn - diễn viên</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Đạo diễn - diễn viên</strong>
                </li>
            </ol>
        </div>
    </div>
<div class="container mt-4">
    <div class="form-group border-0 shadow">
        <div class="card">
            <div class="card-header bg-dark text-white text-center font-weight-bold text-uppercase py-3">
                Danh sách danh mục đạo diễn
            </div>
            <div class="card-body">
            <div class="form-group row">
            <div class="form-inline col-md-3">
                {!! Form::label('directors_multiple', 'Hiển thị theo số cột ', ['class' => 'font-weight-bold']) !!}
                <select class="form-control ml-3" id="directors_multiple" name="directors_multiple">
                    <option>5</option>
                    <option>10</option>
                    <option>15</option>
                    <option>20</option>
                    <option>25</option>
                </select>
            </div>
            <div class="form-inline col-md-9">
                {!! Form::text('directors_search', '', ['class' => 'form-control', 'placeholder' => 'Nhập từ khóa cần tìm']) !!}
                {!! Form::button('Search', (['class' => 'btn btn-outline-primary ml-3'])); !!}
            </div>
            </div>
                <div class="containe">
                    <div class="form-group">
                        <div class="col-md-12 position-alert">
                        @include('admin.includes.alert')
                        </div>
                        <table class="table table-hover table-responsive-md table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Full name</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">Công việc</th>
                                    <th scope="col">Ngày tạo</th>
                                    <th scope="col" class="text-center">Xử lý</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($directors_all as $key => $director)
                                <tr class="{{ (isset($directors) && $directors->id == $director->id) ? 'bg-info font-weight-bold' : 'table-primary' }}">
                                        <td><strong>{{ ++$key }}.</strong></td>
                                        <td>{!! ($director->full_name) !!}</td>
                                        <td>{!! ($director->slug) !!}</td>
                                        <td>{!! ($director->job) !!}</td>
                                        <td>{!! date('d/m/Y',strtotime(date($director->created_at))) !!}</td>
                                        <td class="text-center">
                                            @include('admin.modals.directors.delete')
                                            <a class='btn btn-success btn-xs b-r-xs' href="{!! route('directors.edit',$director->id) !!}"><i class="far fa-edit"></i> Edit</a>
                                            <a href='#Delete-{{$director->id}}' data-toggle="modal" class="btn btn-danger btn-xs b-r-xs"><i class="far fa-trash-alt"></i> Delete</a>
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
<div class="row justify-content-center">{{ $directors_all->links() }}</div>
@endsection
