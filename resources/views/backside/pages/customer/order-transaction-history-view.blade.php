@extends('backside.layout.app', ['breadcrumb_heading' => 'Customer Feature', 'breadcrumb_sections' => ['Customer Feature', 'Order Transaction History']])

@section('page-title', 'AZ Product - Order Transaction History')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h4 class="card-title">Order Transaction History</h4>
                </div>
                <div class="table-responsive">
                    <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                        <thead>
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Ref</th>
                                <th class="text-center align-middle">Product Name</th>
                                <th class="text-center align-middle">Price</th>
                                <th class="text-center align-middle">Ordered at</th>
                                <th class="text-center align-middle">Order Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center align-middle">-</td>
                                <td class="text-center align-middle">-</td>
                                <td class="text-center align-middle">-</td>
                                <td class="text-center align-middle">-</td>
                                <td class="text-center align-middle">-</td>
                                <td class="text-center align-middle">-</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Ref</th>
                                <th class="text-center align-middle">Product Name</th>
                                <th class="text-center align-middle">Price</th>
                                <th class="text-center align-middle">Ordered at</th>
                                <th class="text-center align-middle">Order Status</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
