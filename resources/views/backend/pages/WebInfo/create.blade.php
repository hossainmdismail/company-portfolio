@extends('backend.layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-7 col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>Name</td>
                        <th>Address</th>
                        <th>Number</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($webInfo as $info)
                    <tr>
                        <td>{{ $info->name }}</td>
                        <td>{{ $info->address }}</td>
                        <td>{{ $info->number }}</td>
                        <td class="d-flex align-items-center"><i class="fa fa-circle text-{{ $info->status != 2 ? 'success':'warning' }} mr-1"></i>{{ $info->status != 2 ? 'Active':'Deactive' }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('webinfo.edit', $info->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>

                                <form action="{{ route('webinfo.destroy',$info->id) }}" method="POST">
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
    <div class="col-lg-5 col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('webinfo.store') }}" method="POST">
                    @csrf
                    <div class="my-3">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="my-3">
                        <input type="text" class="form-control" name="address" placeholder="Address">
                    </div>
                    <div class="my-3">
                        <input type="text" class="form-control" name="number" placeholder="Number">
                    </div>
                    <button type="submit" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                    </span>Add</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
