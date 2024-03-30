@extends('backend.layouts.app')

@section('content')
    <div class="row mb-5">
        <div class="col-lg-12 col-md-12">
            <!-- Button trigger modal -->
        <button  type="" class="  btn btn-sm  btn-rounded btn-info mb-1" data-toggle="modal" data-target="#exampleModal">
            Add
        </button>
            <div class="card">
                <div class="card-header">
                    <h4 class="text"> Content items</h4>
                </div>
                <div class="card-body">
                    <div class="table-response">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Item Title</th>
                                    <th>Item Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($items)
                                    @foreach ($items as $data )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->item_title }}</td>
                                            <td>{{ $data->item_description }}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('content-item.edit', $data->id) }}"
                                                    class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                    class="fa fa-pencil"></i></a>
                                                    <form action="{{ route('content-item.destroy', $data->id) }}" method="POST">
                                                        @csrf @method('DELETE')
                                                        <button class="btn btn-danger shadow btn-xs sharp btn sweet-success-cancel"><i
                                                                class="fa fa-trash"></i></button>
                                                    </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--content Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModal">Create Content Items </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('content-item.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="my-3">
                        <input type="hidden" name="content_id" id="" value="{{ $content_id }}">
                        <input type="text" class="form-control" name="item_title" placeholder="Content Item Title">
                    </div>
                    <div class="my-3">
                        <textarea name="item_description" class="form-control" id="" cols="30" rows="10"
                            placeholder="Content Item Description"></textarea>
                    </div>
                    <div class="float-right">
                        <button type="submit" class="btn btn-sm btn-primary">Create</button>
                      </div>

                </form>

            </div>

          </div>
        </div>
      </div>
      @endsection
