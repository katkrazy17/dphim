<?php

namespace App\Http\Controllers\V1\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Admin\Login\ChangePasswordRequest;
use App\Repositories\Admin\AdminRepositoryInterface;

class AdminController extends Controller
{

    protected $adminRepository;

    public function __construct(
        AdminRepositoryInterface $adminRepository
    ) {
        $this->middleware('auth:admin');
        $this->adminRepository = $adminRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        if ($this->adminRepository->changePassword($request->password_old, $request->password_new)) {
            return redirect()->back()->with('status_s', 'Thay đổi mật khẩu thành công !!!');
        }
        return redirect()->back()->with('checkPassword', 'Mật khẩu cũ không tồn tại. Vui lòng nhập lại');
    }
}
