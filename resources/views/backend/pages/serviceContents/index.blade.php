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
                    <h4 class="text">Service Content</h4>
                </div>
                <div class="card-body">
                    <div class="table-response">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($service_contents)
                                    @foreach ($service_contents as $data )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->sub_title }}</td>
                                            <td>{{ $data->sub_description }}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('service-contents.edit', $data->id) }}"
                                                    class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                    class="fa fa-pencil"></i></a>
                                                    <form action="{{ route('service-contents.destroy', $data->id) }}" method="POST">
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
    <div class="row mt-5">
        <div class="col-lg-12 col-md-12">
            <button type="" class="  btn btn-sm  btn-rounded btn-info mb-1" data-toggle="modal" data-target="#contentModal">
                Add
             </button>
            <div class="card">
                <div class="card-header">
                    <h4 class="text">Contents</h4>
                </div>
                <div class="card-body">
                    <div class="table-response">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Content Title</th>
                                    <th>Content Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($contents)
                                    @foreach ($contents as  $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->content_title }}</td>
                                            <td>{{ $data->content_description }}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('content-item.show', $data->id) }}"
                                                    class="btn btn-info shadow btn-xs sharp mr-1"><i
                                                        class="fa fa-eye"></i></a>
                                                <a href="{{ route('contents.edit', $data->id) }}"
                                                    class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                    class="fa fa-pencil"></i></a>
                                                    <form action="{{ route('contents.destroy', $data->id) }}" method="POST">
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



  <!--service content Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Service Content </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('service-contents.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="my-3">
                    <input type="hidden" name="service_id" id="" value="{{ $id }}">
                    <input type="text" class="form-control" name="sub_title" placeholder="Title">

                </div>
                <div class="my-3">
                    <textarea name="sub_description" class="form-control" id="" cols="30" rows="10"
                        placeholder="Description"></textarea>
                </div>
                <div class="float-right">

                    <button type="submit" class="btn btn-sm btn-primary">Create</button>
                  </div>

            </form>
        </div>

      </div>
    </div>
  </div>

    <!--content Modal -->
    <div class="modal fade" id="contentModal" tabindex="-1" aria-labelledby="contentModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="contentModal">Create Contents </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('contents.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="my-3">
                        <input type="hidden" name="service_id" id="" value="{{ $id }}">
                        <input type="text" class="form-control" name="content_title" placeholder="Content Title">
                    </div>
                    <div class="my-3">
                        <textarea name="content_description" class="form-control" id="" cols="30" rows="10"
                            placeholder="Content Description"></textarea>
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
