<!DOCTYPE html>
<html lang="en">
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
@include('layouts.style')
</head>
<body>
@include('layouts.head')
<section class="category-header-area">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="e"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item">
                            <a href="#">
                                Login                            </a>
                        </li>
                    </ol>
                </nav>
                <h1 class="category-name">
                    Registered User                </h1>
            </div>
        </div>
    </div>
</section>
<section class="category-course-list-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
              <div class="user-dashboard-box mt-3">
                  <div class="user-dashboard-content w-100 register-form hidden" style="display: block;">
                      <div class="content-title-box">
                          <div class="title">Registration Form</div>
                          <div class="subtitle">Sign Up And Start Learning.</div>
                      </div>
                      <form method="POST" action="{{ route('register') }}">
                            @CSRF
                          <div class="content-box">
                              <div class="basic-group">
                                  <div class="form-group">
                                      <label for="name"><span class="input-field-icon"><i class="fas fa-user"></i></span> First Name:</label>
                                      <input  class="form-control" id="name"  type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                                  </div>
                                  <div class="form-group">
                                      <label for="email"><span class="input-field-icon"><i class="fas fa-envelope"></i></span> Email:</label>
                                      <input type="email" class="form-control" name="email" id="email" placeholder="Email"  >
                                  </div>
                                  <div class="form-group">
                                      <label for="password"><span class="input-field-icon"><i class="fas fa-lock"></i></span> Password:</label>
                                      <input type="password" class="form-control" name="password" id="password" placeholder="Password" >
                                  </div>
                                  <div class="form-group">
                                      <label for="password_confirmation"><span class="input-field-icon"><i class="fas fa-lock"></i></span> Password:</label>
                                      <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Password" >
                                  </div>
                              </div>
                          </div>
                          @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif
            
                          <div class="content-update-box">
                              <button type="submit" class="btn">{{ __('Register') }}</button>
                          </div>
                          <div class="account-have text-center">
                          <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                          </div>
                          
                      </form>
                  </div>

                  
              </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>