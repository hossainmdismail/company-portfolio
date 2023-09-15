@extends('backend.layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>Name</th>
                        <th>Title</td>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($social_links as $social)
                    <tr>
                        <td>{{ $social->name }}</td>
                        <td>{{ $social->title }}</td>
                        {{-- <td><i class="{{ $social->title }}"></i></td> --}}
                        <td class="d-flex align-items-center"><i class="fa fa-circle text-{{ $social->status != 2 ? 'success':'warning' }} mr-1"></i>{{ $social->status != 2 ? 'Active':'Deactive' }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('sociallink.edit', $social->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>

                                <form action="{{ route('sociallink.destroy',$social->id) }}" method="POST">
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
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('sociallink.store') }}" method="POST">
                    @csrf
                    <div class="my-3">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="my-3">
                        <input type="text" class="form-control" name="title" placeholder="Title">
                    </div>
                    <button type="submit" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                    </span>Add</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
