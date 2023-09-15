@extends('backend.layouts.app')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('category.index')}}">Category</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit</a></li>
    </ol>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            {{-- <div class="card-header">
                <h4 class="card-title">Add Category</h4>
            </div> --}}
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <img src="" alt="">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="profile" class="custom-file-input" required>
                                <label class="custom-file-label">Profile</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <input class="form-control @error('name') is-invalid @enderror " name="name" type="text" value="{{ $user->name }}" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control @error('email') is-invalid @enderror " name="email" type="text" value="{{ $user->email }}" placeholder="example@email.com" required>
                        </div>

                        <button type="submit" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-user"></i>
                        </span>Update User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection