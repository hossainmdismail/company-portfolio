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
                    <form action="{{ route('category.update',$data->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <input class="form-control @error('name') is-invalid @enderror " name="name" type="text" value="{{ $data->name }}" placeholder="Category Name*">
                        </div>
                        <div class="form-group">
                            <textarea rows="5" class="form-control @error('description') is-invalid @enderror " name="description" type="text" placeholder="Category Description*">{{ $data->description }}</textarea>
                        </div>

                        <hr class="hr text-primary">

                        <div class="form-group">
                            <input class="form-control" name="seo_title" type="text" value="{{ $data->seo_title }}" placeholder="Seo title">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="seo_description" type="text" value="{{ $data->seo_description }}" placeholder="Seo description">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="seo_tags" type="text" value="{{ $data->seo_tags }}" placeholder="Seo tags,">
                        </div>
                        <button type="submit" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-wrench"></i>
                        </span>Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection