@extends('backside.layout.app', ['breadcrumb_heading' => 'Member Information', 'breadcrumb_sections' => ['Member Information', 'Manage Member']])

@section('page-title', 'AZ Product - Manage Member')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                        <thead>
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Name</th>
                                <th class="text-center align-middle">Email</th>
                                <th class="text-center align-middle">Phone Number</th>
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
                                    <a href="{{ route('admin.manage-member.product-link-view', ['member_id' => 1]) }}" class="btn btn-sm btn-secondary">
                                        <i class="fas fa-box"></i>
                                    </a>
                                    <a href="{{ route('admin.manage-member.mutation-view', ['member_id' => 1]) }}" class="btn btn-sm btn-info">
                                        <i class="fa fa-dollar-sign"></i>
                                    </a>
                                    <a href="{{ route('admin.manage-member.edit-view', ['member_id' => 1]) }}" class="btn btn-sm btn-success">
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
                                <th class="text-center align-middle">Name</th>
                                <th class="text-center align-middle">Email</th>
                                <th class="text-center align-middle">Phone Number</th>
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
