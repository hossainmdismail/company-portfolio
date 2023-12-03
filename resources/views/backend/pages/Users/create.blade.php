@extends('backend.layouts.app')

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">User</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('user.index') }}">Create</a></li>
        </ol>
    </div>

    <div class="row">
        <div class="col-12 col-xl-8 h-100">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td class="d-flex"> <img src="{{ asset('uploads/users/' . $user->profile) }}"
                                                class="rounded h-100 mr-2" width="30"> {{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at->diffForHumans() }}</td>
                                        @if (Auth::user()->role == 'admin')
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-eye"></i></a>

                                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                                        @csrf @method('DELETE')
                                                        <button
                                                            class="btn btn-danger shadow btn-xs sharp btn sweet-success-cancel"><i
                                                                class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        @endif
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">No Data Found !</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4">
            <div class="card" style="height: fit-content;">
                <div class="card-body">
                    <div class="profile-statistics mb-5">
                        <div class="text-center">
                            <div class="row justify-content-center">
                                <img src="{{ asset('uploads/users/' . Auth::user()->profile) }}" class="rounded h-100 mr-2"
                                    width="100">
                            </div>
                            <div class="mt-4 text-center">
                                <p>{{ Auth::user()->name }}</p>
                            </div>
                            <div class="mt-4">
                                <a href="javascript:void()" class="btn btn-primary mb-1" data-toggle="modal"
                                    data-target="#sendMessageModal">Update Profile</a>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="sendMessageModal">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Update Profile</h5>
                                        <button type="button" class="close"
                                            data-dismiss="modal"><span>&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('user.update', Auth::user()->id) }}" method="POST"
                                            class="comment-form" enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="text-black font-w600">Name <span
                                                                class="required">*</span></label>
                                                        <input type="text" class="form-control" name="name"
                                                            value="{{ Auth::user()->name }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="text-black font-w600">Email <span
                                                                class="required">*</span></label>
                                                        <input type="text" class="form-control"
                                                            value="{{ Auth::user()->email }}" name="email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="text-black font-w600">Profile</label>
                                                        <input type="file" class="form-control" name="profile">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-0">
                                                        <input type="submit" value="Update" class="submit btn btn-primary"
                                                            name="submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if (Auth::user()->role == 'admin')
                <div class="card">
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="profile" class="custom-file-input" required>
                                        <label class="custom-file-label">Profile</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input class="form-control @error('name') is-invalid @enderror " name="name"
                                        type="text" value="{{ old('name') }}" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control @error('email') is-invalid @enderror " name="email"
                                        type="text" value="{{ old('email') }}" placeholder="example@email.com"
                                        required>
                                </div>

                                <div class="form-group">
                                    <select name="role" class="form-control @error('role') is-invalid @enderror">
                                        <option value="" selected>Select Role</option>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input class="form-control @error('email') is-invalid @enderror " name="email"
                                        type="text" value="{{ old('email') }}" placeholder="example@email.com"
                                        required>
                                </div>

                                <div class="form-group">
                                    <input class="form-control" name="password" type="password"
                                        value="{{ old('password') }}" placeholder="Password" required>
                                </div>
                                <button type="submit" class="btn btn-rounded btn-info"><span
                                        class="btn-icon-left text-info"><i class="fa fa-user"></i>
                                    </span>Add User</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        </div>

    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // SmartWizard initialize
            $('#smartwizard').smartWizard();
        });
    </script>
@endsection
