@extends('dashboardlogin') 
    
@section('content') 
        <div class="login-form">
            <h2>Màn hình đăng nhập</h2>
            
           <form action="{{route('postLogin')}} " method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Email</label>
                <input type="email" id="email" name="email">
            </div>
            
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password">
            </div>
            
            <div class="remember-me">
                <input type="checkbox" id="remember" name="remember" checked>
                <label for="remember">Ghi nhớ đăng nhập</label>
            </div>
            
            <div class="button-group">
                <a href="#" class="forgot-password">Quên mật khẩu</a>
                <button class="login-button">Đăng nhập</button>
            </div>
        </div>
    </form>

        <div class="footer">
            Lập trình web @01/2024
        </div>
    </div>
@endsection('content')