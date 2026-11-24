
@extends('layouts.app')

@section('content')

<style>

</style>


<section class="success-page">
    <div class="success-card">

        <div class="success-icon">
            <i class="bi bi-check-lg"></i>
        </div>

        <h2>Order Placed Successfully!</h2>

        <p class="mt-3">
            Thank you for shopping with FashionHub.
            Your order has been received successfully.</p>

        <p>We appreciate your purchase and hope you enjoy your products! </p>

        <a href="{{ url('/home') }}" class="success-home-btn"><i class="bi bi-shop"></i> Continue Shopping </a>

    </div>
</section>

@endsection
