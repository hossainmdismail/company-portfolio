@extends('backend.layouts.app')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('product.index')}}">product</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit</a></li>
    </ol>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            {{-- <div class="card-header">
                <h4 class="card-title">Add product</h4>
            </div> --}}
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{ route('product.update',$data->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <input class="form-control @error('service') is-invalid @enderror " name="service" type="text" value="{{ $data->service }}" placeholder="product *">
                        </div>
                        <button type="submit" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-wrench"></i>
                        </span>Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection