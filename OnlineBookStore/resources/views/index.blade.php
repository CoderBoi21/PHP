@extends('masterlayout')

@section('title','Home')

@section('content')
<div class="container mt-5">
    <div class="jumbotron">
        <h1 class="display-4">Welcome to our Online Bookstore</h1>
        <p class="lead">Find your next favorite book here!</p>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="feature-box text-center">
                <h3>Wide Selection</h3>
                <p>Discover a vast collection of books in various genres.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-box text-center">
                <h3>Easy Shopping</h3>
                <p>Shop for books with ease and convenience.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-box text-center">
                <h3>Secure Payment</h3>
                <p>Enjoy secure and hassle-free payment options.</p>
            </div>
        </div>
    </div>
</div>
    
@endsection