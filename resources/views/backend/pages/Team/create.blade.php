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
                        <th>Career Title</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($teams as $team)
                    <tr>
                        <td>{{ $team->user_id }}</td>
                        <td>{{ $team->profile }}</td>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->career_title }}</td>
                        <td class="d-flex align-items-center"><i class="fa fa-circle text-{{ $team->status != 2 ? 'success':'warning' }} mr-1"></i>{{ $team->status != 2 ? 'Active':'Deactive' }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('team.edit', $team->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>

                                <form action="{{ route('team.destroy',$team->id) }}" method="POST">
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
                <form action="{{ route('team.store') }}" method="POST">
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
                        <input type="text" class="form-control" name="profile" placeholder="Profile">
                    </div>
                    <div class="my-3">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="my-3">
                        <input type="text" class="form-control" name="career_title" placeholder="Career Title">
                    </div>

                    <button type="submit" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                    </span>Add</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
