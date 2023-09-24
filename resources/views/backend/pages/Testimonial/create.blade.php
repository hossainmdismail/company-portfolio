@extends('backend.layouts.app')

@section('content')
<div class="row">
    <div class="col-12 col-xl-7 h-100">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>User id</th>
                        <th>Profile</td>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Field</th>
                        <th>Comment</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($testimonials as $testimonial)
                    <tr>
                        <td>{{ $testimonial->user_id }}</td>
                        <td><img width = "50" src="{{ asset('uploads/testimonial') }}/{{ $testimonial->profile }}"></td>
                        <td>{{ $testimonial->name }}</td>
                        <td>{{ $testimonial->title }}</td>
                        <td>{{ $testimonial->field }}</td>
                        <td>{{ $testimonial->comment }}</td>
                        <td class="d-flex align-items-center"><i class="fa fa-circle text-{{ $testimonial->status != 2 ? 'success':'warning' }} mr-1"></i>{{ $testimonial->status != 2 ? 'Active':'Deactive' }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('testimonial.edit', $testimonial->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>

                                <form action="{{ route('testimonial.destroy',$testimonial->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger shadow btn-xs sharp btn sweet-success-cancel"><i class="fa fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-5">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="profile" class="custom-file-input @error('profile') is-invalid @enderror">
                            <label class="custom-file-label">Profile</label>
                        </div>
                    </div>
                    <div class="my-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name">
                    </div>
                    <div class="my-3">
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Title">
                    </div>
                    <div class="my-3">
                        <input type="text" class="form-control @error('field') is-invalid @enderror" name="field" placeholder="Field">
                    </div>
                    <div class="my-3">
                        <textarea name="comment" id="" cols="30" rows="10" class="form-control" placeholder="Comment"></textarea>
                    </div>

                    <button type="submit" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                    </span>Add</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
