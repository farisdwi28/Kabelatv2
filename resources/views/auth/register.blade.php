
@extends('layouts.auth')

@section('title', 'Register')

@section('content')


<div class="about-header-area register-page"
    style="background-image: url(build/img/bg/inner-header.png); background-repeat: no-repeat; background-size: cover; background-position: center;min-height: 100vh;">
    <img src="{{ URL::asset('build/img/elements/elements1.png') }}" alt="" class="elements1 aniamtion-key-1">
    <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="about-inner-header heading9 ">
            <div class="card rounded-4 mb-0 border-top auth-card">
              <div class="card-body p-5">

                <div class="row">
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center justify-content-center text-center mb-5">
                      <img src="{{ URL::asset('build/img/logo/logo4.png') }}" class="" alt="">
                    </div>
                    <img src="{{ URL::asset('build/img/all-images/about-img3.png') }}" alt="" height="530">
                  </div>
                  <div class="col-lg-6">
                    <div class="text-center ">
                      <h4 class="fw-bold">Get Started Now</h4>
                      <p class="mb-4 text-dark">Enter your Details to Ragister your account</p>
                    </div>
                    <div class="form-body">
                     
                              <form class="needs-validation" method="POST" action="{{ route('register') }}">
                              @csrf

                                <div class="mb-3">
                                  <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control auth-card @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" id="username" placeholder="Enter username">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                  <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
                                  <input type="email" class="form-control auth-card @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="useremail" placeholder="Enter email address" required>
                                  @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
              
                                <div class="mb-3">
                                  <label class="form-label" for="password-input">Password</label>
                                  <div class="position-relative auth-pass-inputgroup">
                                    <input type="password" class="form-control pe-5 password-input auth-card @error('password') is-invalid @enderror" name="password" onpaste="return false" placeholder="Enter password" id="password-input" aria-describedby="passwordInput" required>
                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                </div>

                                <div class="mb-3">
                                  <label class="form-label" for="password-input">Confirm Password</label>
                                  <div class="position-relative auth-pass-inputgroup">
                                    <input type="password" class="form-control pe-5 password-input auth-card @error('password') is-invalid @enderror" name="password_confirmation" onpaste="return false" placeholder="Enter password" id="password-input" aria-describedby="passwordInput" required>
                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                </div>
              
                                <div class="mb-4">
                                  <p class="mb-0 fs-12 text-muted fst-italic">By registering you agree to the SEOC <a href="#" class="text-dark text-decoration-underline fst-normal fw-bold">Terms of Use</a></p>
                                </div>
              
                                  <div class="col-12 mb-3">
                                    <div class="d-grid">
                                      <button type="submit" class="btn1 auth-card">Register</button>
                                    </div>
                                  </div>
                                </form>

                                <div
                                  class="separator section-padding mt-4 d-flex align-items-center justify-content-center">
                                  <div class="line"></div>
                                  <p class="mb-0 fw-bold text-uppercase text-dark">Or Sign in with</p>
                                  <div class="line"></div>
                                </div>

                                <div class="d-flex gap-2 align-items-center justify-content-center mt-4">
                                  <a href="javascript:;" class="btn1 auth-card social-icon">
                                    <i class="fa-brands fa-google fs-5 text-dark"></i>
                                  </a>
                                  <a href="javascript:;" class="btn1 auth-card social-icon">
                                    <i class="fa-brands fa-facebook fs-5 text-dark"></i>
                                  </a>
                                  <a href="javascript:;" class="btn1 auth-card social-icon">
                                    <i class="fa-brands fa-linkedin fs-5 text-dark"></i>
                                  </a>
                                  <a href="javascript:;" class="btn1 auth-card social-icon">
                                    <i class="fa-brands fa-github fs-5 text-dark"></i>
                                  </a>
                                </div>
                                <div class="mt-4 text-center">
                                  <p class="mb-0 text-dark">Don't have an account ? <a href="{{ route('login') }}"
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