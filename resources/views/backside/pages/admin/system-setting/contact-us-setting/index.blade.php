@extends('backside.layout.app', ['breadcrumb_heading' => 'System Setting', 'breadcrumb_sections' => ['System Setting', 'Contact Us Setting']])

@section('page-title', 'AZ Product - Contact Us Setting')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="card-title">Contact Us Setting</h4>
                </div>
                @if(session()->has('errors'))
                <div class="alert alert-danger mt-3">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-body">
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="form-label">Email Subject Format <span class="text-danger">*</span> </label>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" placeholder="Email Subject Format" name="email_subject" value="{{ old('email_subject') }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-label">Customer Service Email <span class="text-danger">*</span> </label>
                                <div class="form-group mb-3">
                                    <input type="email" class="form-control" placeholder="Customer Service Email" name="customer_service_email" value="{{ old('customer_service_email') }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-label">Company Email <span class="text-danger">*</span> </label>
                                <div class="form-group mb-3">
                                    <input type="email" class="form-control" placeholder="Company Email" name="company_email" value="{{ old('company_email') }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-label">Customer Service Whatsapp <span class="text-danger">*</span> </label>
                                <div class="form-group mb-3">
                                    <input type="tel" class="form-control" placeholder="Customer Service Whatsapp" name="customer_service_whatsapp" value="{{ old('customer_service_whatsapp') }}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="text-end">
                            <button type="submit" class="btn btn-info">
                                <i class="fas fa-edit"></i>
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
