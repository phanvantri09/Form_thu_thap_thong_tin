<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('./homepage/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('./homepage/fontawesome/css/all.min.css') }}">
    <title>login</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/277542467_535436591248256_2486848342470499489_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=aee45a&_nc_ohc=fWmh9HkRktYAX9QHqJf&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AVLrkZd0rXcYIXl8Uy-HQVFUfA3vcCAyGZESe8Mzy-CS5g&oe=6267EA48" class="img-fluid"
                alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                  {{Session::get('success')}}
                </div>
              @endif 
              @if(Session::has('error'))
                <div class="alert alert-danger" role="alert">
                  {{Session::get('error')}}
                </div>
              @endif
              <form action="{{ route('postLogin') }}" method="POST" enctype="multipart/form-data">
                @csrf 
      
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0">Mời bạn đăng nhập</p>
                </div>
      
                <!-- Email input -->
                <div class="form-outline mb-4">
                  @error('email')
                    <small class="help-block">{{$message}}</small>
                  @enderror
                  <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
                    placeholder="Enter a valid email address" />
                  <label class="form-label" for="form3Example3">Địa chỉ Email</label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                  @error('password')
                    <small class="help-block">{{$message}}</small>
                  @enderror
                  <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
                    placeholder="Enter password" />
                  <label class="form-label" for="form3Example4">Mật khẩu</label>
                </div>
      
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" name="rememberMe" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      Nhớ cho lần đăng nhập sau
                    </label>
                  </div>
                </div>
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Đăng nhập</button>
                  {{-- <p class="small fw-bold mt-2 pt-1 mb-0">Bạn chưa có tài khoản! <a href=""
                      class="link-danger">Đăng ký ngay</a></p> --}}
                      <p class="small fw-bold mt-2 pt-1 mb-0"><a href="{{ route('changepass') }}"
                        class="link-danger">Quên mật khẩu</a></p>
                </div>
      
              </form>
            </div>
          </div>
        </div>
      </section>
    
</body>
</html>