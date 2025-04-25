
        
@extends('dashboardlist') 
    
@section('content')  
        <div class="registration-form">
            <h2>Màn hình cập nhật</h2>
        <form action="{{route('showUpdate')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input name="id" type="hidden" value="{{$user->id}}">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="{{$user->name}}">
            </div>
            
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" value="{{$user->password}}">
            </div>
            
            <div class="form-group">
                <label for="confirm-password">Nhập lại mật khẩu</label>
                <input type="password" id="confirm-password" name="confirm-password">
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{$user->email}}">
            </div>
          
            <div class="form-group">
                <label for="ageage">Age</label>
                <input type="text" id="age" name="age"value="{{$user->age}}" >
            </div>
            <div class="form-group">
                <label for="github">Github</label>
                <input type="text" id="github" name="github"value="{{$user->github}}">
            </div> 
        
            <div class="form-group">
                <label for="files">Files</label>
                <input type="file" id="files" name="files[]" multiple>
                
                @if (!empty($user->files))
                    <div>
                        @foreach (json_decode($user->files) as $file)
                            <p><a href="{{ asset('storage/' . $file) }}" target="_blank">{{ $file }}</a></p>
                        @endforeach
                    </div>
                @endif
            </div>
            
            

            <div class="button-group">
                <a href="#" class="have-account">Đã có tài khoản</a>
                <button class="register-button">Đăng ký</button>
            </div>
        </form>
        </div>
        
        <div class="footer">
            Lập trình web @01/2024
        </div>
        @endsection('content')