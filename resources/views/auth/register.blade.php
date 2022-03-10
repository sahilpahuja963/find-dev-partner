@extends('layouts/fullLayoutMaster')

@section('title', 'Register Page')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/page-auth.css')) }}">
@endsection

@section('content')
<div class="auth-wrapper auth-v1 px-2">
  <div class="auth-inner py-2">
    <!-- Register v1 -->
    <div class="card mb-0">
      <div class="card-body">
        <h4 class="card-title mb-1">Adventure starts here 🚀</h4>
        <p class="card-text mb-2">Make Your Development Easier!</p>
        <div class="col-xl-12 col-lg-12">
          <div class="card">
            <form class="auth-register-form mt-2" method="POST" action="{{ route('register') }}">
              @csrf
              <div class="card-body">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" aria-controls="home" role="tab" aria-selected="true">Login Info</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" aria-controls="profile" role="tab" aria-selected="false">Personal Info</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" aria-controls="about" role="tab" aria-selected="false">Skills</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="home" aria-labelledby="home-tab" role="tabpanel">
                  <form class="auth-register-form mt-2" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                      <label for="register-username" class="form-label">Username</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" id="register-username" name="name" placeholder="johndoe" aria-describedby="register-username" tabindex="1" autofocus value="{{ old('name') }}" />
                      @error('name')
                      <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="register-email" class="form-label">Email</label>
                      <input type="text" class="form-control @error('email') is-invalid @enderror" id="register-email" name="email" placeholder="john@example.com" aria-describedby="register-email" tabindex="2" value="{{ old('email') }}" />
                      @error('name')
                      <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="register-password" class="form-label">Password</label>

                      <div class="input-group input-group-merge form-password-toggle @error('password') is-invalid @enderror">
                        <input type="password" class="form-control form-control-merge @error('password') is-invalid @enderror" id="register-password" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="register-password" tabindex="3" />
                        <div class="input-group-append">
                          <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                        </div>
                      </div>
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="register-password-confirm" class="form-label">Confirm Password</label>

                      <div class="input-group input-group-merge form-password-toggle">
                        <input type="password" class="form-control form-control-merge" id="register-password-confirm" name="password_confirmation" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="register-password" tabindex="3" />
                        <div class="input-group-append">
                          <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="register-privacy-policy" tabindex="4" />
                        <label class="custom-control-label" for="register-privacy-policy">
                          I agree to <a href="javascript:void(0);">privacy policy & terms</a>
                        </label>
                      </div>
                    </div>
                    <button id="next" type="submit" class="btn btn-primary btn-block"  tabindex="5">Next</button>
                  </form>
                </div>
                <div class="tab-pane" id="profile" aria-labelledby="profile-tab" role="tabpanel">
                  <div class="form-group">
                    <label for="register-username" class="form-label">First Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="register-username" name="name" placeholder="johndoe" aria-describedby="register-username" tabindex="1" autofocus value="{{ old('name') }}" />
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="register-username" class="form-label">Last Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="register-username" name="name" placeholder="johndoe" aria-describedby="register-username" tabindex="1" autofocus value="{{ old('name') }}" />
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
                    @enderror
                  </div>
                  <button type="button" class="btn btn-primary btn-block" tabindex="5">Next</button>

                </div>
                <div class="tab-pane" id="about" aria-labelledby="about-tab" role="tabpanel">
                  <div class="form-group">
                    <label for=" form-label">Skill 1</label>
                    <select class="form-control" id="basicSelect">
                      <option>IT</option>
                      <option>Blade Runner</option>
                      <option>Thor Ragnarok</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="basicSelect">Skill 2</label>
                    <select class="form-control" id="basicSelect">
                      <option>IT</option>
                      <option>Blade Runner</option>
                      <option>Thor Ragnarok</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="basicSelect">Skill 3</label>
                    <select class="form-control" id="basicSelect">
                      <option>IT</option>
                      <option>Blade Runner</option>
                      <option>Thor Ragnarok</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="basicSelect">Skill 4</label>
                    <select class="form-control" id="basicSelect">
                      <option>IT</option>
                      <option>Blade Runner</option>
                      <option>Thor Ragnarok</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="basicSelect">Skill 5</label>
                    <select class="form-control" id="basicSelect">
                      <option>IT</option>
                      <option>Blade Runner</option>
                      <option>Thor Ragnarok</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block" tabindex="5">Submit</button>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
        <p class="text-center mt-2">
          <span>Already have an account?</span>
          @if (Route::has('login'))
          <a href="{{ route('login') }}">
            <span>Sign in instead</span>
          </a>
          @endif
        </p>

        <div class="divider my-2">
          <div class="divider-text">or</div>
        </div>

        <div class="auth-footer-btn d-flex justify-content-center">
          <a href="javascript:void(0)" class="btn btn-facebook">
            <i data-feather="facebook"></i>
          </a>
          <a href="javascript:void(0)" class="btn btn-twitter white">
            <i data-feather="twitter"></i>
          </a>
          <a href="javascript:void(0)" class="btn btn-google">
            <i data-feather="mail"></i>
          </a>
          <a href="javascript:void(0)" class="btn btn-github">
            <i data-feather="github"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- /Register v1 -->
  </div>
</div>
@endsection
