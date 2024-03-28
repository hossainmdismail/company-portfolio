@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-sm  btn-rounded btn-info" data-toggle="modal" data-target="#exampleModal">

               Add
            </button>


            <div class="card">
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
                                <tr>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-5 col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="my-3">
                            <input type="text" class="form-control" name="title" placeholder="Title">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="thumbnail" class="custom-file-input form-control">
                                <label class="custom-file-label">Thumbnail</label>
                            </div>
                        </div>

                        <div class="my-3">
                            <textarea name="description" class="form-control" id="" cols="30" rows="10"
                                placeholder="Description"></textarea>
                        </div>

                        <button type="submit" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i
                                    class="fa fa-plus color-info"></i>
                            </span>Add</button>
                    </form>
                </div>
            </div>
        </div> --}}
    </div>
@endsection


  <!-- Modal -->
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
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="my-3">
                    <input type="text" class="form-control" name="title" placeholder="Title">
                </div>



                <div class="my-3">
                    <textarea name="description" class="form-control" id="" cols="30" rows="10"
                        placeholder="Description"></textarea>
                </div>
                <div class="float-right">

                    <button type="button" class="btn btn-sm btn-primary">Create</button>
                  </div>

            </form>
        </div>

      </div>
    </div>
  </div>
