@extends('auth.layout.app')

@section('page-title', 'AZ Product - Login Page')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh">
            <div class="col-6">
                <div class="card border border-0 shadow p-4">
                    <h3 class="text-uppercase mb-4 text-center">az product - login</h3>
                    @if (session()->has('fail'))
                        <div class="alert alert-danger">
                            {{ session()->pull('fail') }}
                        </div>
                    @endif
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-info text-white">Login</button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-grid">
                                        <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">Register</button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Choose your Roles</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-grid">
                                                            <a href="{{ route('auth.register-customer-view') }}" class="btn btn-warning text-white">Register as Customer</a>
                                                            <div class="my-3"></div>
                                                            <a href="{{ route('auth.register-member-view') }}" class="btn btn-success text-white">Register as Member</a>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-4">
                                <h4 class="text-center">Or</h4>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-grid">
                                        <a href="" class="btn btn-danger text-white">Login With Google</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
