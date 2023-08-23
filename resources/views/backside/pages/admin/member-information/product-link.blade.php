@extends('backside.layout.app', ['breadcrumb_heading' => 'Member Information', 'breadcrumb_sections' => ['Member Information', 'Manage Member', 'Product Link']])

@section('page-title', 'AZ Product - Member Product Links')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h4 class="card-title">Product Link</h4>
                    <a href="{{ route('admin.manage-member.index-view') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i>
                        {{ __('Back') }}
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
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center align-middle">-</td>
                                <td class="text-center align-middle">-</td>
                                <td class="text-center align-middle">-</td>
                                <td class="text-center align-middle">-</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Product Name</th>
                                <th class="text-center align-middle">Link</th>
                                <th class="text-center align-middle">Commission (%)</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
