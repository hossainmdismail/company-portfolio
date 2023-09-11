@extends('backend.layouts.app')

@section('content')
<div class="page-titles d-flex justify-content-between">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{route('blog.index')}}">Blog</a></li>
    </ol>
    <ol>
        <a href="{{ route('blog.create') }}" class="btn btn-info btn-xs">Create</a>
    </ol>
</div>
@php
    $catid =null;
    if ( request()->has('category')) {
        $catid = $_GET['category'];
    }
@endphp
<div class="row">
    <div class="col-12">
        <div class="card">
            <form action="" id="form">@csrf
                <div class="card-header d-flex justify-content-between align-item-center">
                    <div>{{ $catid }}</div>
                    <div class="d-flex">
                        <select class="form-control form-control-sm default-select mr-4 h-100" name="category" id="">
                            <option value="">Category</option>
                            @forelse ($category as $cates)
                                <option value="{{ $cates->id }}" {{ $cates->id == $catid ? 'selected':'' }}>{{ $cates->name }}</option>
                            @empty
                                
                            @endforelse
                        </select>
                        <button class="btn btn-xs btn-primary mr-2 h-100">Search</button>
                        <button type="button" class="btn btn-xs light btn-light h-100" id="clearBtn">Clear</button>
                    </div>
                </div>
            </form>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Seo</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $blogs)
                                <tr>
                                    <td>{{ $blogs->title }}</td>
                                    <td>{{ $blogs->created_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="d-flex align-items-center"><i class="fa fa-circle text-{{ empty($blogs->seo_title && $blogs->seo_description && $blogs->seo_tags)?'warning':'success' }} mr-1"></i>{{ empty($blogs->seo_title && $blogs->seo_description && $blogs->seo_tags)?'Edit Seo':'Completed' }}</div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center"><i class="fa fa-circle text-{{ $blogs->status != 0 ? 'success':'warning' }} mr-1"></i> {{ $blogs->status != 0 ? 'Active':'Deactive' }}</div>
                                    </td>
                                    
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('blog.edit', $blogs->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            
                                            <form action="{{ route('blog.destroy',$blogs->id) }}" method="POST">
                                                @csrf @method('DELETE')
                                                <button class="btn btn-danger shadow btn-xs sharp btn sweet-success-cancel"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">No Data Found !</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $catid == ''? $data->links('pagination::bootstrap-5'):'' }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        var form = document.getElementById("form");
        var clearButton = document.getElementById("clearBtn");
        

        // Add a click event listener to the clear button
        clearButton.addEventListener("click", function() {
            // Loop through all form elements and set their values to an empty string
            var elements = form.elements;
            for (var i = 0; i < elements.length; i++) {
                var element = elements[i];
                if (element.type !== "button") { // Skip the clear button itself
                    element.value = "";
                }
            }
        });
    </script>
@endsection