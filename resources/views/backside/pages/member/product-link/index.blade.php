@extends('backside.layout.app', ['breadcrumb_heading' => 'Product Link Information', 'breadcrumb_sections' => ['Product Link Information', 'Manage Product Link']])

@section('page-title', 'AZ Product - Manage Product Link')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <a href="{{ route('member.product-link.create-view') }}" class="btn btn-info">
                        <i class="fa fa-plus-circle"></i>
                    </a>
                </div>
                <div class="table-responsive">
                    <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                        <thead>
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Product Name</th>
                                <th class="text-center align-middle">Link</th>
                                <th class="text-center align-middle">Commission (%)</th>
                                <th class="text-center align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($product_affiliates as $product_affiliate)
                            <tr>
                                <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                <td class="text-center align-middle">{{ $product_affiliate->product->product_name }}</td>
                                <td class="text-center align-middle">{{ $product_affiliate->product_affiliate_link }}</td>
                                <td class="text-center align-middle">{{ Helper::convertDoubleToPercent($product_affiliate->product->commission_percent).'%' }}</td>
                                <td class="text-center align-middle">
                                    <a href="{{ route('member.product-link.show-related-product', ['product_id' => $product_affiliate->product->id, 'product_link_id' => $product_affiliate->id]) }}" class="btn btn-sm btn-info">
                                        <i class="fas fa-box"></i>
                                    </a>
                                    <a href="{{ route('member.product-link.edit-product-link-view', ['product_link_id' => 1]) }}" class="btn btn-sm btn-success">
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
                                <th class="text-center align-middle">Link</th>
                                <th class="text-center align-middle">Commission (%)</th>
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
