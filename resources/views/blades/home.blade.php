@extends('welcome')

@push('title','Home')

@section('body')
<section style="display: flex; justify-content: center; align-items: center; width: 100vw; height: 100vh;">
    <a href="{{route('dashboard')}}" class="btn text-white btn-lg btn-floating" style="background-color: rgb(191, 194, 4);" href="#!" role="button">
        <i class="fab fa-solid fa-arrow-right"></i>
    </a>
</section>
@endsection