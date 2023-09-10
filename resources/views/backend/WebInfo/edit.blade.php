@extends('backend.layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('webinfo.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="my-3">
                        <select name="user_id" id="" class="form-control">
                            <option value="">-- User Id --</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="my-3">
                        <input type="text" class="form-control" name="title" placeholder="Title">
                    </div>
                    <div class="my-3">
                        <input type="file" class="form-control" name="thumbnail" placeholder="Thumbnail">
                    </div>
                    <div class="my-3">
                        <textarea name="description" class="form-control" id="" cols="30" rows="10" placeholder="Description"></textarea>
                    </div>
                    <div class="my-3">
                        <select name="status" id="" class="form-control">
                            <option value="1">Active</option>
                            <option value="2">Deactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
