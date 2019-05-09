@extends('admin.layouts.master')
@section('title','Quản lý tags')
@section('page-heading')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2 class="text-uppercase font-weight-bold">Quản lý tags</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>tags</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8">
        <div class="title-action">
            <a href="{{ route('tags.create') }}" class="btn btn-primary b-r-xs">Thêm tags mới <i class="fas fa-plus"></i></a>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="form-group row bg-white pb-4">
    <div class="col-md-12 position-alert">
        @include('admin.includes.alert')
    </div>
    <div class="col-md-12">
        @include('admin.contents.tags.table')
    </div>
</div>
@endsection