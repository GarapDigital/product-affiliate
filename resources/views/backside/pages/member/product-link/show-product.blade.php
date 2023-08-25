@extends('backside.layout.app', ['breadcrumb_heading' => 'Product Link Information', 'breadcrumb_sections' => ['Product Link Information', 'Manage Product Link', 'Show Product']])

@section('page-title', 'AZ Product - Show Product')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="card-title">Show Product</h4>
                    <a href="{{ route('member.product-link.index-view') }}" class="btn btn-secondary">
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
                                <label class="form-label">Product Name </label>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('product_name', $related_product) }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-label">Product Description </label>
                                <div class="form-group mb-3">
                                    <textarea placeholder="Product Description" class="form-control" name="product_description" rows="5" disabled>{{ old('product_description', $related_product->product_description) }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="form-label">Product Price </label>
                                <div class="form-group mb-3">
                                    <input type="number" class="form-control" placeholder="Product Price" name="price" value="{{ old('price', $related_product->price) }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="form-label">Product Image </label>
                                <div class="form-group mb-3">
                                    <img src="{{ $related_product->product_image }}" class="img-fluid mb-3" style="width: 250px; height: 200px;">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="form-label">Product Commission </label>
                                <div class="form-group mb-3">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="product_price">%</span>
                                        <input type="number" class="form-control" placeholder="Commission (Percent)" aria-describedby="product_price" value="{{ Helper::convertDoubleToPercent($related_product->commission_percent) }}" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
