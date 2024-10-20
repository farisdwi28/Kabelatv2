@extends('layouts.auth')

@section('title', 'Change Password')

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
                      <div class="p-2">
                        <form class="mt-4 pt-2" method="POST" action="{{ route('password.update') }}">
                        @csrf
                          <!-- <input type="hidden" name="token" value="<%= token %>"> -->

                          <div class="mb-3">
                                  <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
                                  <input type="email" class="form-control auth-card @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" id="useremail" placeholder="Enter email address" required>
                                  @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                          <div class="mb-3">
                            <label class="form-label" for="input-newpassword">Password</label>
                            <div class="input-group" id="show_hide_password">
                              <input type="password" class="form-control pe-5 password-input auth-card @error('password') is-invalid @enderror" name="password" id="input-newpassword" onpaste="return false" placeholder="Enter password" id="password-input" aria-describedby="passwordInput" required>
                              <a href="javascript:;" class="btn1 input-group-text bg-transparent auth-card"><i class="fa-solid fa-eye"></i></a>
                            </div>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                          </div>
        
                          <div class="mb-3">
                            <label class="form-label" for="input-confirmpassword">Confirm Password</label>
                            <div class="input-group" >
                              <input type="password" class="form-control pe-5 password-input auth-card" onpaste="return false" name="password_confirmation" id="input-confirmpassword" minlength="5" placeholder="Confirm password" id="confirm-password-input" required>
                              <a href="javascript:;" class="btn1 input-group-text bg-transparent auth-card"><i class="fa-solid fa-eye"></i></a>
                            </div>
                          </div>
                           
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                            <label class="form-check-label" for="auth-remember-check">Remember me</label>
                          </div>
        
                          <div class="mt-4">
                            <button class="btn1 w-100 auth-card" type="submit">Reset Password</button>
                          </div>
        
                        </form>
    
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
    </div>

@endsection
