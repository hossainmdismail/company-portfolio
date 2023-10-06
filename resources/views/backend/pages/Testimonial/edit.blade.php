@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('testimonial.update', $testimonial->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="my-3">
                            <select name="user_id" id="" class="form-control">
                                <option value="">-- User Id --</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}"
                                        {{ $testimonial->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="profile" placeholder="Profile"
                                value="{{ $testimonial->profile }}">
                            <label class="custom-file-label">Profile</label>
                        </div>
                        <div class="my-3">
                            <input type="text" class="form-control" name="name" placeholder="Name"
                                value="{{ $testimonial->name }}">
                        </div>
                        <div class="my-3">
                            <input type="text" class="form-control" name="title" placeholder="Title"
                                value="{{ $testimonial->title }}">
                        </div>
                        <div class="my-3">
                            <input type="text" class="form-control" name="field" placeholder="Field"
                                value="{{ $testimonial->field }}">
                        </div>
                        <div class="my-3">
                            <textarea name="comment" id="" cols="30" rows="10" class="form-control" placeholder="Comment">{{ $testimonial->comment }}</textarea>
                        </div>
                        <div class="my-3">
                            <select name="status" id="" class="form-control">
                                <option value="1"{{ $testimonial->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="2" {{ $testimonial->status == 2 ? 'selected' : '' }}>Deactive</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i
                                    class="fa fa-wrench"></i>
                            </span>Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
