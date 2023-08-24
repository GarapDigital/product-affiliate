@extends('backside.layout.app', ['breadcrumb_heading' => 'User Profile', 'breadcrumb_sections' => ['User Profile']])

@section('page-title', 'AZ Product - User Profile')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="card-title">User Profile</h4>
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
                <form action="{{ route('member.update-user-profile-action') }}" method="POST">
                    @csrf
                    <div class="form-body">
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="form-label">Name <span class="text-danger">*</span> </label>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name', $logged_member->name) }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-label">Email <span class="text-danger">*</span> </label>
                                <div class="form-group mb-3">
                                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email', $logged_member->email) }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-label">Phone Number <span class="text-danger">*</span> </label>
                                <div class="form-group mb-3">
                                    <input type="tel" class="form-control" placeholder="Phone Number" name="phone_number" value="{{ old('phone_number', $logged_member->phone_number) }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-label">New Password </label>
                                <div class="form-group mb-3">
                                    <input type="password" class="form-control" placeholder="New Password" name="new_password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-label">Bank </label>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" placeholder="Bank" name="bank" value="{{ old('bank', $logged_member->userProfile->bank ?? null) }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-label">Bank Account Number </label>
                                <div class="form-group mb-3">
                                    <input type="number" class="form-control" placeholder="Bank Account Number" name="bank_account_number" value="{{ old('bank_account_number', $logged_member->userProfile->bank_account_number ?? null) }}">
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
