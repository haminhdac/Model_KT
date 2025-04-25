<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;

class LoginController extends Controller
{
    //
    //function show view login
    public function showLogin()
    {
        return view("login");
    }

    public function showUpdate(Request $request)
    {
        $user_id = $request->get('id');
        $user = User::find($user_id);
        return view('update', ['user' => $user]);
    }

    public function showRegister()
    {
        return view("register");
    }
    public function showList()
    {
        $lstuser = User::paginate(10);
        return view("list", compact('lstuser'));
    }
    //hàm xử lý đăng kí tài khoản mới
    public function registerNewUser(Request $request)
    {
        // Kiểm tra nếu người dùng tải lên tệp
        $filePaths = [];
        if ($request->hasFile('files')) {
            // Nếu có tệp, lưu vào thư mục 'uploads' trong storage
            foreach ($request->file('files') as $file) {
                $filePaths[] = $file->store('uploads', 'public');
            }
        }
    
        // Tạo người dùng mới
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'age' => $request->age,
            'github' => $request->github,
            'files' => json_encode($filePaths),  // Lưu đường dẫn tệp dưới dạng JSON
        ]);
    
        return redirect(route('showlogin'))->with(200, 'Create new user success');
    }
    
    

    public function postUpdate(Request $request)
    {
        $input = $request->all();
    $user = User::find($input['id']);
    $user->name = $input['username'];
    $user->email = $input['email'];
    $user->password = Hash::make($input['password']);
    $user->age = $input['age'];
    $user->github = $input['github'];

    // Kiểm tra nếu người dùng tải tệp lên
    $filePaths = [];
    if ($request->hasFile('avatar')) {
        foreach ($request->file('avatar') as $file) {
            // Lưu từng tệp và thêm vào danh sách các tệp
            $filePaths[] = $file->store('uploads', 'public');
        }
    }

    // Lưu danh sách tệp vào trường 'files' của người dùng
    $user->files = json_encode($filePaths);
    $user->save();

    return redirect(route('showList'))->withSuccess('you have signed-in');
    }

    /// hàm login
    public function loginNewUser(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công, chuyển hướng tới trang chính
            return redirect(route('showList'));
        }

        // Đăng nhập thất bại, hiển thị form đăng nhập lại với thông báo lỗi
        return redirect()->back()->withInput()->withErrors(['email' => 'Email hoặc mật khẩu không chính xác']);
    }
    // public function showIndex()
    // {
    //     return view("index");
    // }

}
