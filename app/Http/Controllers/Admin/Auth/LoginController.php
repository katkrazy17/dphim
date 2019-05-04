<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Requests\Admin\LoginRequest;
use App\Http\Controllers\Controller;
use App\Repositories\Admin\AdminRepositoryInterface;

class LoginController extends Controller
{
    
    protected $adminRepository;

    public function __construct(AdminRepositoryInterface $adminRepository)
    {
        $this->middleware('guest:admin', ['except' => ['logout']]);
        $this->adminRepository = $adminRepository;
        
    }
    public function getLogin()
    {
        return view('admin.login');
    }
    public function login(LoginRequest $request)
    {
        $rememberMe = false;
        if (isset($request->remember)) {
            $rememberMe = true;
        }
        $login_type = filter_var($request['admin_name'], FILTER_VALIDATE_EMAIL)
         ? 'email'
         : 'admin_name';
        $request->merge([
            $login_type => $request['admin_name'],
            'status' => 1
        ]);
        $data = $request->only([
            $login_type,
            'password',
            'status',
        ]);
        return $this->adminRepository->login($data, $rememberMe);
    }
    public function logout()
    {
        return $this->adminRepository->logout();
    }
}
