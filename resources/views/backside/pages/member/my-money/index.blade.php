@extends('backside.layout.app', ['breadcrumb_heading' => 'User Finance Information', 'breadcrumb_sections' => ['User Finance Information', 'My Money']])

@section('page-title', 'AZ Product - My Money')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h3>My Money</h3>
                    <h3>Total Balance : Rp 3,000,000</h3>
                </div>
                <div class="table-responsive">
                    <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                        <thead>
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Link</th>
                                <th class="text-center align-middle">Balance</th>
                                <th class="text-center align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center align-middle">-</td>
                                <td class="text-center align-middle">-</td>
                                <td class="text-center align-middle">-</td>
                                <td class="text-center align-middle">
                                    <a href="{{ route('member.member-finance.my-money.mutation-view', ['my_money_id' => 1]) }}" class="btn btn-sm btn-info">
                                        Mutation
                                    </a>
                                    <a href="" class="btn btn-sm btn-success btn-withdraw">
                                        Withdraw
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Link</th>
                                <th class="text-center align-middle">Balance</th>
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
