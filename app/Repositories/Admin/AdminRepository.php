<?php

namespace App\Repositories\Admin;
use Auth;
use App\Repositories\BaseRepository;
use App\Models\Admin;
use App\Repositories\Admin\AdminRepositoryInterface;

class AdminRepository extends BaseRepository implements AdminRepositoryInterface
{
    /**
     * Specify Model class name
     */
    function model()
    {
        return Admin::class;
    }
    public function login(array $attributes, $remember){
        if (Auth::guard('admin')->attempt($attributes, $remember)) {  
            return redirect('admin/dashboard');
        } else {
            return redirect()->back()->with('status', 'Tên người dùng và mật khẩu không tồn tại');
        }
    }

    public function logout()
    {
        if(Auth::guard('admin')->check()){ 
            Auth::guard('admin')->logout();
            return redirect()->guest(route('admin.login')); 
        }
    }

    public function createMany(array $attributes, $relations){
        try {
            \DB::beginTransaction();
            $admin = $this->create($attributes);
            $admin->roles()->attach($relations);
            \DB::commit();
            return true;
        } catch (\Exception $e) {
            \DB::rollBack();
            return false;
        }
    }
    
}