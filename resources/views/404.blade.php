@extends('layouts.auth')
@section('title', '404 Error')

@section('content')

<x-page-title title="Home" pagetitle="404 Error" maintitle="404 Error" />

<!--===== ERROR AREA STARTS =======-->
<div class="error-section-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="heading2 text-center">
                    <img src="{{ URL::asset('build/img/all-images/error-img1.png') }}" alt="">
                    <div class="space50"></div>
                    <h2> Sorry! Page Not Found!</h2>
                    <div class="space16"></div>
                    <p>Sorry, the page you are looking for doesn’t exist or has <br class="d-lg-block d-none"> been moved. Here are some helpful links.</p>
                    <div class="space24"></div>
                    <div class="btn-area1">
                        <a href="index" class="header-btn1">Back To Home <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== ERROR AREA ENDS =======-->

@endsection