@extends('backside.layout.app', ['breadcrumb_heading' => 'Product Link Information', 'breadcrumb_sections' => ['Product Link Information', 'Manage Product Link', 'Create']])

@section('page-title', 'AZ Product - Create Product Link')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="card-title">Generate Product Link</h4>
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
                                <label class="form-label">Select Products <span class="text-danger">*</span> </label>
                                <div class="form-group mb-3">
                                    <select name="product_id" class="form-control" required>
                                        <option value="" selected hidden>Select Products</option>
                                        <option value="">Product A - 5% Commission</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="text-end">
                            <button type="submit" class="btn btn-info">
                                <i class="fas fa-edit"></i>
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
