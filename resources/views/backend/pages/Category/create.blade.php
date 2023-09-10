@extends('backend.layouts.app')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Category</a></li>
    </ol>
</div>

<div class="row">
    <div class="col-12 col-xl-6 h-100">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Category</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Seo</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <div class="d-flex align-items-center"><i class="fa fa-circle text-{{ empty($category->seo_title && $category->seo_description && $category->seo_tags)?'warning':'success' }} mr-1"></i>{{ empty($category->seo_title && $category->seo_description && $category->seo_tags)?'Edit Seo':'Completed' }}</div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center"><i class="fa fa-circle text-{{ $category->status != 0 ? 'success':'warning' }} mr-1"></i> {{ $category->status != 0 ? 'Active':'Deactive' }}</div>
                                    </td>
                                    
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <span>No Data Found</span>
                            @endforelse
                            

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Category</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input class="form-control @error('name') is-invalid @enderror " name="name" type="text" value="{{ old('name') }}" placeholder="Category Name*">
                        </div>
                        <div class="form-group">
                            <textarea rows="5" class="form-control @error('description') is-invalid @enderror " name="description" type="text" value="{{ old('description') }}" placeholder="Category Description*"></textarea>
                        </div>

                        <hr class="hr text-primary">

                        <div class="form-group">
                            <input class="form-control" name="seo_title" type="text" value="{{ old('seo_title') }}" placeholder="Seo title">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="seo_description" type="text" value="{{ old('seo_description') }}" placeholder="Seo description">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="seo_tags" type="text" value="{{ old('seo_tags') }}" placeholder="Seo tags,">
                        </div>
                        <button type="submit" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                        </span>Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

    <script>
        $(document).ready(function(){
            // SmartWizard initialize
            $('#smartwizard').smartWizard(); 
        });
    </script>
@endsection