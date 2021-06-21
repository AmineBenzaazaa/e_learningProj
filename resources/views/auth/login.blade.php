@include('layouts.header')
<body class="gray-bg">   
<section class="category-header-area">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="http://pn-learning-management-system-online.test/home"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item">
                            <a href="#">
                                Sign Up 
                            </a>
                        </li>
                    </ol>
                </nav>
                <h1 class="category-name">
                    Register Yourself
                </h1>
            </div>
        </div>
    </div>
</section>
<section class="category-course-list-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
              <div class="user-dashboard-box mt-3">
                  <div class="user-dashboard-content w-100 login-form hidden" style="display: block;">
                      <div class="content-title-box">
                          <div class="title">Login</div>
                          <div class="subtitle">Provide Your Valid Login Credentials.</div>
                      </div>
                      <form method="POST" action="{{ route('login') }}">
                      @csrf
                          <div class="content-box">
                              <div class="basic-group">
                                  <div class="form-group">
                                      <label for="login-email"><span class="input-field-icon"><i class="fas fa-envelope"></i></span>{{ __('Email') }}</label>
                                      <input type="email" class="form-control" name="email" id="login-email" placeholder="Email" :value="old('email')" required autofocus>
                                  </div>
                                  <div class="form-group">
                                      <label for="login-password"><span class="input-field-icon"><i class="fas fa-lock"></i></span>{{ __('Password') }}</label>
                                      <input type="password" class="form-control" name="password" placeholder="Password" required autocomplete="current-password">
                                  </div>
                              </div>
                            </div>
                            <div class="content-update-box">
                            <button type="submit" class="btn">{{ __('Log in') }}</button>
                            </div>
                            <div class="forgot-pass text-center">
                                  <span>or</span>
                                @if (Route::has('password.request'))
                                  <a href="{{ route('password.request') }}" >{{ __('Forgot your password?') }}</a>
                                @endif
                            </div>
                            <div class="account-have text-center">
                                Do Not Have An Account? <a href="{{ route('register') }}">Sign Up</a>
                            </div>
                        </form>
                  </div>
              </div>
            </div>
        </div>
    </div>
</section>
</body>
@include('layouts.footer')