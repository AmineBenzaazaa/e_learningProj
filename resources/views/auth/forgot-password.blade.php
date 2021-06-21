@include('layouts.header')
<section class="category-course-list-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
              <div class="user-dashboard-box mt-3">
                  <div class="user-dashboard-content w-100 forgot-password-form hidden" style="display: block;">
                      <div class="content-title-box">
                          <div class="title">Forgot Password</div>
                          <div class="subtitle">Provide Your Email Address To Get Password.</div>
                      </div>
                        <form method="POST" action="{{ route('password.email') }}">
                        @csrf  
                          <div class="content-box">
                              <div class="basic-group">
                                  <div class="form-group">
                                      <label for="forgot-email"><span class="input-field-icon"><i class="fas fa-envelope"></i></span>{{ __('Email') }}</label>
                                      <input type="email" class="form-control" name="email" id="forgot-email" placeholder="Email"  :value="old('email')" required autofocus>
                                      <small class="form-text text-muted">Provide Your Email Address To Get Password.</small>
                                  </div>
                              </div>
                          </div>
                          <div class="content-update-box">
                              <button type="submit" class="btn">{{ __('Email Password Reset Link') }}</button>
                          </div>
                          <div class="forgot-pass text-center">
                              Want To Go Back? <a href="{{ route('login') }}">Login</a>
                          </div>
                      </form>
                  </div>
              </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
