@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card ">
                <div class="card-header">
                    <h4>Edit Content</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('contents.update',$content->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="my-3">
                            {{-- <input type="hidden" name="service_id" id="" value="{{  }}"> --}}
                            <input type="text" class="form-control" name="content_title" placeholder="Title" value="{{ $content->content_title }}">
                        </div>
                        <div class="my-3">
                            <textarea name="content_description" class="form-control" id="" cols="30" rows="10"
                                placeholder="Description">{{ $content->content_description }}</textarea>
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


