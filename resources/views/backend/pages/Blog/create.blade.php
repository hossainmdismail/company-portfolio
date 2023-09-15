@extends('backend.layouts.app')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('blog.index')}}">Blog</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Create</a></li>
    </ol>
</div>

<form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12 col-xl-6">
            <div class="card">
                {{-- <div class="card-header">
                    <h4 class="card-title">Add Category</h4>
                </div> --}}
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-group">
                            <select name="category"  class="form-control @error('category') is-invalid @enderror" id="">
                                    <option value="">Select Category</option>
                                @foreach ($category as $cat)
                                    <option value="{{ $cat->id }}" {{ old('category') == $cat->id?'selected':'' }}>{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="form-control @error('title') is-invalid @enderror " name="title" type="text" value="{{ old('title') }}" placeholder="Title">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="thumbnail" class="custom-file-input @error('thumbnail') is-invalid @enderror">
                                <label class="custom-file-label">Thumbnail</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-12 col-xl-6">
            <div class="card">
                {{-- <div class="card-header">
                    <h4 class="card-title">Add Category</h4>
                </div> --}}
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-group">
                            <input class="form-control" name="seo_title" type="text" value="{{ old('seo_title') }}" placeholder="Seo title">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="seo_description" type="text" value="{{ old('seo_description') }}" placeholder="Seo description">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="seo_tags" type="text" value="{{ old('seo_tags') }}" placeholder="Seo tags,">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="col-12">
            <div class="card">
                {{-- <div class="card-header">
                    <h4 class="card-title">Add Category</h4>
                </div> --}}
                <div class="card-body">
                    <textarea class="summernote @error('content') is-invalid @enderror" name="content"></textarea>
                    <div id="summernote"></div>
                    <button type="submit" class="btn btn-rounded btn-info mt-4"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                    </span>Post</button>
                </div>
    
                
            </div>
        </div>
    </div>
</form>
@endsection

@section('script')
    <!-- Summernote -->
    <script src="{{ asset('asset/Backend/vendor/summernote/js/summernote.min.js') }}"></script>
    <!-- Summernote init -->
    <script src="{{ asset('asset/Backend/js/plugins-init/summernote-init.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>
@endsection