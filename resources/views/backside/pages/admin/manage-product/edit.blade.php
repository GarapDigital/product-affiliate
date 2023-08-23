@extends('backside.layout.app', ['breadcrumb_heading' => 'Product Information', 'breadcrumb_sections' => ['Product Information', 'Manage Product', 'Edit']])

@section('page-title', 'AZ Product - Edit Product')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="card-title">Edit Product</h4>
                    <a href="{{ route('admin.manage-product.index-view') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i>
                        {{ __('Back') }}
                    </a>
                </div>
                @if(session()->has('errors'))
                <div class="alert alert-danger mt-3">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-body">
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="form-label">Product Name <span class="text-danger">*</span> </label>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('product_name') }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-label">Product Description <span class="text-danger">*</span> </label>
                                <div class="form-group mb-3">
                                    <textarea placeholder="Product Description" class="form-control" name="description" rows="5" required>{{ old('description') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="form-label">Product Price <span class="text-danger">*</span> </label>
                                <div class="form-group mb-3">
                                    <input type="number" class="form-control" placeholder="Product Price" name="price" value="{{ old('price') }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="form-label">Product Image <span class="text-danger">*</span> </label>
                                <div class="form-group mb-3">
                                    <img src="{{ asset('dummy-assets/no-image.png') }}" class="img-fluid mb-3" style="width: 250px; height: 200px;">
                                    <input type="file" class="form-control" name="product_image" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="form-label">Product Commission <span class="text-danger">*</span> </label>
                                <div class="form-group mb-3">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="product_price">%</span>
                                        <input type="number" class="form-control" placeholder="Commission (Percent)" aria-describedby="product_price" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="text-end">
                            <button type="submit" class="btn btn-info">
                                <i class="fas fa-edit"></i>
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
