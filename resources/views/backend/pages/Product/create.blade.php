@extends('backend.layouts.app')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Product</a></li>
    </ol>
</div>

<div class="row">
    <div class="col-12 col-xl-6 h-100">
        <div class="card">
            {{-- <div class="card-header">
                <h4 class="card-title">product</h4>
            </div> --}}
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Seo</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $product)
                                <tr>
                                    <td>{{ $product->service }}</td>

                                    <td>
                                        <div class="d-flex align-items-center"><i class="fa fa-circle text-{{ $product->status != 0 ? 'success':'warning' }} mr-1"></i> {{ $product->status != 0 ? 'Active':'Deactive' }}</div>
                                    </td>
                                    
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            
                                            <form action="{{ route('product.destroy',$product->id) }}" method="POST">
                                                @csrf @method('DELETE')
                                                <button class="btn btn-danger shadow btn-xs sharp btn sweet-success-cancel"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
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
    <div class="col-12 col-xl-6">
        <div class="card">
            {{-- <div class="card-header">
                <h4 class="card-title">Add product</h4>
            </div> --}}
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{ route('product.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input class="form-control @error('service') is-invalid @enderror " name="service" type="text" value="{{ old('service') }}" placeholder="Service Name*">
                        </div>
                        <button type="submit" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                        </span>Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

    <script>
        $(document).ready(function(){
            // SmartWizard initialize
            $('#smartwizard').smartWizard(); 
        });
    </script>
@endsection