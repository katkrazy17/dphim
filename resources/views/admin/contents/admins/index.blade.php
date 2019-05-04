@extends('admin.layouts.index') 
@section('title', 'Quản lý quyền hệ thống') 
@section('content')
<div class="row justify-content-between">
    <h3>Danh mục Menu</h3>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="" data-whatever="@mdo">Thêm danh mục</button>
</div>
  <div class="col-md-8 pr-0">
      <div class="card">
          <div class="card-header bg-green text-white">
            Danh sách người dùng
          </div>
          <div class="card-body pl-0 pr-0">
            <table class="table table-hover table-striped">
            	<thead>
            		<tr>
            			<th>#</th>
            			<th>Tên Admin</th>
                  <th>Email</th>
            			<th>Ngày tạo</th>
                  <th>Chức năng</th>
            		</tr>
            	</thead>
            	<tbody>
            	@php
                    $stt = 1;
              @endphp
              @foreach ($admins as $admin)
              <tr>
                            <td>{{ $stt++ }}</td>
                            <td>{{ $admin->admin_name }}</td>
                             <td>{{ $admin->email }}</td>
                             <td>{{$admin->created_at}}</td>
                             <td>
                             <div class="dropdown">
                                    <button class="btn btn-success dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Chọn chức năng
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="triggerId">
                                        <a class="dropdown-item" data-toggle="modal" href='#'>Xem chi tiết<i class="fa fa-trash-o"></i></a>
                                        {{-- button edit --}}
                                        <a id="" data-id="" class="dropdown-item" data-toggle="modal" href='#'>Sửa thông tin<i class="fa fa-trash-o"></i></a>
                                        {{-- button delete --}} 
                                        <a class="dropdown-item" data-toggle="modal" href='#'>Xóa dữ liệu<i class="fa fa-trash-o"></i></a>
                                    </div>
                                </div>
                             </td>
              </tr>
              @endforeach
            	</tbody>
            </table>
          </div>
        </div>
  </div>
</div>
@endsection
