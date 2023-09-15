@extends('backend.layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('webinfo.update', $web_info->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="my-3">
                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $web_info->name }}">
                    </div>
                    <div class="my-3">
                        <input type="text" class="form-control" name="address" placeholder="Address" value="{{ $web_info->address }}">
                    </div>
                    <div class="my-3">
                        <input type="text" class="form-control" name="number" placeholder="Number" value="{{ $web_info->number }}">
                    </div>
                    <div class="my-3">
                        <select name="status" id="" class="form-control">
                            <option value="1"{{ $web_info->status == 1?'selected':'' }}>Active</option>
                            <option value="2" {{ $web_info->status == 2?'selected':'' }}>Deactive</option>
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
