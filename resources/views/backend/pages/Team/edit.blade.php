@extends('backend.layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('team.update', $team->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="my-3">
                        <select name="user_id" id="" class="form-control">
                            <option value="">-- User Id --</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" {{ $team->user_id == $user->id?'selected':'' }}>{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="my-3">
                        <input type="text" class="form-control" name="profile" placeholder="Profile" value="{{ $team->profile }}">
                    </div>
                    <div class="my-3">
                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $team->name }}">
                    </div>
                    <div class="my-3">
                        <input type="text" class="form-control" name="career_title" placeholder="Career Title" value="{{ $team->career_title }}">
                    </div>
                    <div class="my-3">
                        <select name="status" id="" class="form-control">
                            <option value="1"{{ $team->status == 1?'selected':'' }}>Active</option>
                            <option value="2" {{ $team->status == 2?'selected':'' }}>Deactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-wrench"></i>
                    </span>Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
