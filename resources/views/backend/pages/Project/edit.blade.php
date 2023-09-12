@extends('backend.layouts.app')

@section('content')
<div class="page-titles d-flex justify-content-between">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('project.index')}}">Project</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $project->title }}</a></li>
    </ol>
    <ol>
        <a href="{{ route('project.index') }}" class="btn btn-info btn-xs"><span class="mr-2"><</span> Back</a>
    </ol>
</div>

<form action="{{ route('project.update',$project->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-12 col-xl-6">
            <div class="card">
                {{-- <div class="card-header">
                    <h4 class="card-title">Add product</h4>
                </div> --}}
                <div class="card-body">
                    <div class="basic-form">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <select name="product"  class="form-control @error('product') is-invalid @enderror" id="">
                                            <option value="">Select product</option>
                                        @foreach ($product as $cat)
                                            <option value="{{ $cat->id }}" {{ $project->product_id == $cat->id?'selected':'' }}>{{ $cat->service }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <input class="form-control @error('client') is-invalid @enderror " name="client" type="text" value="{{ $project->client }}" placeholder="Client name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <div class="form-group">
                                    <input class="form-control @error('title') is-invalid @enderror " name="title" type="text" value="{{ $project->title }}" placeholder="Title">
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <input class="form-control @error('budget') is-invalid @enderror " name="budget" type="number" value="{{ $project->budget }}" placeholder="$">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-9">
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
                            <div class="col-3">
                                <img class="w-100" src="{{ asset('uploads/project/'.$project->thumbnail) }}" alt="">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-12 col-xl-6">
            <div class="card">
                {{-- <div class="card-header">
                    <h4 class="card-title">Add product</h4>
                </div> --}}
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-group">
                            <input class="form-control" name="seo_title" type="text" value="{{ $project->seo_title }}" placeholder="Seo title">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="seo_description" type="text" value="{{ $project->seo_description }}" placeholder="Seo description">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="seo_tags" type="text" value="{{ $project->seo_tags }}" placeholder="Seo tags,">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="col-12">
            <div class="card">
                {{-- <div class="card-header">
                    <h4 class="card-title">Add product</h4>
                </div> --}}
                <div class="card-body">
                    <textarea class="summernote @error('content') is-invalid @enderror" name="content">
                        {!! $project->content !!}
                    </textarea>
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