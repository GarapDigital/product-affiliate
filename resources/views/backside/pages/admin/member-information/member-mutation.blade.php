@extends('backside.layout.app', ['breadcrumb_heading' => 'Member Information', 'breadcrumb_sections' => ['Member Information', 'Manage Member', 'Member Mutation']])

@section('page-title', 'AZ Product - Member Mutation')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h4 class="card-title">Member Mutation</h4>
                    <a href="{{ route('member.member-finance.my-money.index-view') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i>
                        {{ __('Back') }}
                    </a>
                </div>
                <div class="table-responsive">
                    <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                        <thead>
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Mutation</th>
                                <th class="text-center align-middle">Balance</th>
                                <th class="text-center align-middle">Created at</th>
                                <th class="text-center align-middle">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
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
                                <th class="text-center align-middle">Mutation</th>
                                <th class="text-center align-middle">Balance</th>
                                <th class="text-center align-middle">Created at</th>
                                <th class="text-center align-middle">Status</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
