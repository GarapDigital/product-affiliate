@extends('backside.layout.app', ['breadcrumb_heading' => 'Product Information', 'breadcrumb_sections' => ['Product Information', 'Manage Product']])

@section('page-title', 'AZ Product - Manage Product')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <a href="{{ route('admin.manage-product.create-view') }}" class="btn btn-info">
                        <i class="fa fa-plus-circle"></i>
                    </a>
                </div>
                <div class="table-responsive">
                    <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                        <thead>
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Product Name</th>
                                <th class="text-center align-middle">Image</th>
                                <th class="text-center align-middle">Price</th>
                                <th class="text-center align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($products as $product)
                            <tr>
                                <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                <td class="text-center align-middle">{{ $product->product_name }}</td>
                                <td class="text-center align-middle">
                                    <a href="{{ $product->product_image }}" class="btn btn-sm btn-primary" target="_blank">
                                        Show Image
                                    </a>
                                </td>
                                <td class="text-center align-middle">{{ Helper::rupiahFormatter($product->price) }}</td>
                                <td class="text-center align-middle">
                                    <a href="{{ route('admin.manage-product.detail-product-view', ['product_id' => 1]) }}" class="btn btn-sm btn-info">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.manage-product.edit-product-view', ['product_id' => 1]) }}" class="btn btn-sm btn-success">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="" class="btn btn-sm btn-danger btn-delete">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan="5">{{ __('Empty') }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Product Name</th>
                                <th class="text-center align-middle">Image</th>
                                <th class="text-center align-middle">Price</th>
                                <th class="text-center align-middle">Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
