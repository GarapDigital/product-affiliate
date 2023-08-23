@extends('backside.layout.app', ['breadcrumb_heading' => 'Dashboard Customer', 'breadcrumb_sections' => ['Dashboard Customer']])

@section('page-title', 'AZ Product - Dashboard Customer')

@section('content')
    <div class="row">
        <div class="col-sm-6 col-lg-4">
            <div class="card border-end">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 font-weight-medium">10</h2>
                            </div>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Order
                            </h6>
                        </div>
                        <div class="ms-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted">
                                <i class="fa fa-box" style="font-size: 1.5em"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
