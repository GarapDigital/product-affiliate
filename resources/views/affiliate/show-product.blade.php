@extends('affiliate.layout.app')

@section('page-title', 'AZ Product - Show Product')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh; margin-top: 100px">
            <div class="col-md-6 col-sm-12">
                <div class="card border border-0 shadow p-4">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-5 col-sm-6">
                            <img src="{{ asset('dummy-assets/caulliflower.png') }}" class="img-fluid" style="width: 100%" alt="">
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-2">
                        <h3><span class="fw-bold">Name :</span> Product A</h3>
                        <h3><span class="fw-bold">Price :</span> 30,000.00</h3>
                        <h3 style="text-align: justify"><span class="fw-bold">Description :</span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem quae eius asperiores ex aliquam, suscipit nisi voluptatum quibusdam? Cupiditate neque, nam sed, laboriosam facilis repudiandae esse aliquid nobis velit modi voluptates recusandae. Distinctio quod reiciendis corporis voluptas optio mollitia earum culpa magnam, maxime voluptatibus possimus excepturi tempora quae rerum perspiciatis praesentium non deserunt quo suscipit aspernatur nam maiores nemo et! Debitis temporibus mollitia odio doloribus obcaecati facere quo ea illo voluptas nulla eos amet fugiat architecto veritatis doloremque illum ipsam possimus, natus molestias facilis laboriosam, eveniet nostrum aliquam? Labore unde incidunt harum aperiam accusantium tenetur ipsam saepe eos eius dolorem qui sapiente, cum repudiandae? Dolor accusantium, officia enim quam fugit saepe porro excepturi animi sapiente voluptas soluta ut cumque dicta eligendi illum quo placeat eius reprehenderit magni deserunt iure? Cupiditate ipsa ad expedita officia quas iste aliquid porro necessitatibus vitae quos sunt recusandae impedit culpa perspiciatis in at distinctio id, corrupti neque asperiores ab enim consequuntur vero! Explicabo perferendis suscipit aperiam neque sed minus eos itaque, magni maxime repellat, quos ratione. Ducimus exercitationem fugit, error reiciendis provident cum doloremque aspernatur saepe architecto accusantium quis qui fuga inventore, dolorum iste sapiente! Explicabo fugit animi qui voluptatem voluptates cumque porro sapiente non!</h3>
                    </div>
                    {{-- <form action="" method="POST">
                        @csrf
                        <input type="hidden">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success text-white my-3">
                                Buy Product
                            </button>
                        </div>
                    </form> --}}
                    <a href="{{ route('a.checkout-form-view', ['affiliate_code' => 'z123ar']) }}" class="btn btn-success text-white my-3">Buy Product</a>
                </div>
            </div>
        </div>
    </div>
@endsection
