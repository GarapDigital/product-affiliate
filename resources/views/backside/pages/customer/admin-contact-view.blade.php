@extends('backside.layout.app', ['breadcrumb_heading' => 'Customer Feature', 'breadcrumb_sections' => ['Customer Feature', 'Contact Us']])

@section('page-title', 'AZ Product - Contact Us')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h4 class="card-title">Contact Us</h4>
                </div>
                <div class="mx-3">
                    <ul style="list-style-type: disc">
                        <li>Email Subject : [Ask Order Transaction]</li>
                        <li>Customer Service Email : example@mail.com</li>
                        <li>Company Email : company@mail.com</li>
                        <li>Customer Service Whatsapp : +62 812 123 1231</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
