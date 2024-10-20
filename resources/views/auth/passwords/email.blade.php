@extends('layouts.auth')

@section('title', 'Forgot Password')

@section('content')

<div class="about-header-area"
        style="background-image: url(build/img/bg/inner-header.png); background-repeat: no-repeat; background-size: cover; background-position: center;min-height: 100vh;">
        <img src="{{ URL::asset('build/img/elements/elements1.png') }}" alt="" class="elements1 aniamtion-key-1">
        <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="about-inner-header heading9 ">
                <div class="card rounded-4 mb-0 border-top auth-card">
                  <div class="card-body p-5">

                    <div class="row">
                      <div class="col-lg-">
                        <div class="text-center ">
                          <img src="{{ URL::asset('build/img/logo/logo4.png') }}" class="mb-3" alt="">
                          <h4 class="fw-bold">Forgot Your Password</h4>
                          <p class="mt-2 text-dark">Enter your Eamil Address</p>
                        </div>
                        <div class="form-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                                  <form method="POST" action="{{ route('password.email') }}">
                                  @csrf
                                    <div class="mb-4">
                                      <label class="form-label">Email</label>
                                      <input type="email" class="form-control auth-card @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email"
                                        placeholder="Enter Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                      <div class="d-grid">
                                        <button type="submit" class="btn1 auth-card">Send Email</button>
                                      </div>
                                    </div>
                                  </form><!-- end form -->

                                  <div class="mt-4 text-center">
                                    <p class="mb-0 text-dark">Remember Your Password ? <a href="{{ route('login') }}"
                                        class="fw-bold text-dark text-decoration"> Sign IN </a> </p>
                                  </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection

