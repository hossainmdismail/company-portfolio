@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card ">
                <div class="card-header">
                    <h4>Edit Service Content</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('service-contents.update',$service_content->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="my-3">
                            {{-- <input type="hidden" name="service_id" id="" value="{{  }}"> --}}
                            <input type="text" class="form-control" name="sub_title" placeholder="Title" value="{{ $service_content->sub_title }}">
                        </div>
                        <div class="my-3">
                            <textarea name="sub_description" class="form-control" id="" cols="30" rows="10"
                                placeholder="Description">{{ $service_content->sub_description }}</textarea>
                        </div>
                        <div class="float-right">
                            <button type="submit" class="btn btn-sm btn-primary">Update</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection


