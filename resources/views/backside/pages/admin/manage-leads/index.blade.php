@extends('backside.layout.app', ['breadcrumb_heading' => 'Leads Information', 'breadcrumb_sections' => ['Leads Information', 'Manage Leads']])

@section('page-title', 'AZ Product - Manage Leads')

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
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($leads as $lead)
                            <tr>
                                <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                <td class="text-center align-middle">{{ $lead->name }}</td>
                                <td class="text-center align-middle">{{ $lead->email }}</td>
                                <td class="text-center align-middle">{{ $lead->phone_number }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan="4">{{ __('Empty') }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Name</th>
                                <th class="text-center align-middle">Email</th>
                                <th class="text-center align-middle">Phone Number</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
