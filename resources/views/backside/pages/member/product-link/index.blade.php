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
                            <tr>
                                <td class="text-center align-middle">-</td>
                                <td class="text-center align-middle">-</td>
                                <td class="text-center align-middle">-</td>
                                <td class="text-center align-middle">-</td>
                                <td class="text-center align-middle">
                                    <a href="{{ route('member.product-link.show-related-product', ['product_id' => 1, 'product_link_id' => 1]) }}" class="btn btn-sm btn-info">
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
