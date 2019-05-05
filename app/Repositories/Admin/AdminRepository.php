<?php

namespace App\Repositories\Admin;

use Auth;
use App\Models\Admin;
use App\Repositories\BaseRepository;
use App\Repositories\Admin\AdminRepositoryInterface;

class AdminRepository extends BaseRepository implements AdminRepositoryInterface
{
    public function model()
    {
        return Admin::class;
    }

    public function login(array $attributes, $remember)
    {
        if (Auth::guard('admin')->attempt($attributes, $remember)) {
            return redirect('admin/categories');
        } else {
            return redirect()->back()->with('status', 'Tên người dùng và mật khẩu không đúng');
        }
    }

    public function logout()
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
            return redirect()->guest(route('admin.login'));
        }
    }

    public function changePassword($pass_old, $pass_new)
    {
        $data = [
            'password' => \Hash::make($pass_new)
        ];
        try {
            if (\Auth::check()) {
                if (\Hash::check($pass_old, \Auth::guard('admin')->user()->password)) {
                    $admin = \Auth::guard('admin')->user()->slug;
                    $adminFind = $this->findBySlugOrFail($admin);
                    $adminFind->update($data);
                    return true;
                }
                return false;
            }
        } catch (\Exception $e) {
            return false;
        }
    }
}