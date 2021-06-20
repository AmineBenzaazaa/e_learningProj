@include('layouts.header')
<body>
<section class="category-header-area">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href=""><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item">
                            <a href="#">
                                Login
                            </a>
                        </li>
                    </ol>
                </nav>
                <h1 class="category-name">
                    Registered User
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
                  
                  <div class="user-dashboard-content w-100 register-form hidden" style="display: block;">
                      <div class="content-title-box">
                          <div class="title">Registration Form</div>
                          <div class="subtitle">Sign Up And Start Learning.</div>
                      </div>
                      <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="content-box">
                              <div class="basic-group">
                                  <div class="form-group">
                                      <label for="first_name"><span class="input-field-icon"><i class="fas fa-user"></i></span> First Name:</label>
                                      <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" value="" required="">
                                  </div>
                                  <div class="form-group">
                                      <label for="last_name"><span class="input-field-icon"><i class="fas fa-user"></i></span> Last Name:</label>
                                      <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" value="" required="">
                                  </div>
                                  <div class="form-group">
                                      <label for="registration-email"><span class="input-field-icon"><i class="fas fa-envelope"></i></span> Email:</label>
                                      <input type="email" class="form-control" name="email" id="registration-email" placeholder="Email" value="" required="">
                                  </div>
                                  <div class="form-group">
                                      <label for="registration-password"><span class="input-field-icon"><i class="fas fa-lock"></i></span> Password:</label>
                                      <input type="password" class="form-control" name="password" id="registration-password" placeholder="Password" value="" required="">
                                  </div>
                              </div>
                          </div>
                          <div class="content-update-box">
                          <x-jet-button class="ml-4">
                            {{ __('Register') }}
                        </x-jet-button>
                          </div>
                          <a class="underline text-sm text-gray-600 hover:text-gray-900 mx-auto text-center" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                      </form>
                  </div>
              </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>




