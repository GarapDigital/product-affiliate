@extends('affiliate.layout.app')

@section('page-title', 'AZ Product - Checkout Form')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh; margin-top: 100px">
            <div class="col-md-8 col-sm-12">
                <div class="card border border-0 shadow p-4">
                    <form action="" method="POST">
                        @csrf
                        <input type="hidden">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="mb-3">
                                    <label for="">Fullname</label>
                                    <input type="text" class="form-control" name="fullname">
                                </div>
                                <div class="mb-3">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="">Phone Number</label>
                                    <input type="tel" class="form-control" name="phone_number">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 my-3">
                                <table class="table table-bordered mt-2">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Product A</td>
                                            <td>30,000.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-info text-white my-3">
                                Checkout
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
