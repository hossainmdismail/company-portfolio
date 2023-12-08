@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header d-flex justify-content-center">
                    <img width="100px" class="rounded" src="{{ asset('uploads/service') }}/{{ $service->image }}"
                        alt="">
                </div>
                <div class="card-body">
                    <form action="{{ route('serviceitem.update', $service->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="my-3">
                            <select name="service_id" class="form-control">
                                <option value="">Select Service</option>
                                @foreach ($services as $servicex)
                                    <option value="{{ $service->id }}"
                                        {{ $servicex->id == $service->service_id ? 'selected' : '' }}>
                                        {{ $servicex->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="my-3">
                            <input type="text" class="form-control" name="title" placeholder="Title"
                                value="{{ $service->title }}">
                        </div>
                        <div class="my-3">
                            <input type="file" class="form-control" name="thumbnail" placeholder="Thumbnail">
                        </div>
                        <div class="my-3">
                            <textarea name="description" class="form-control" id="" cols="30" rows="10"
                                placeholder="Description">{{ $service->description }}</textarea>
                        </div>
                        <div class="my-3">
                            <select name="status" id="" class="form-control">
                                <option value="1" {{ $service->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="2" {{ $service->status == 2 ? 'selected' : '' }}>Deactive</option>
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
