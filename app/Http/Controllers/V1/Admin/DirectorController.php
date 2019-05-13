<?php

namespace App\Http\Controllers\V1\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Admin\Director\StoreRequest;
use App\Http\Requests\V1\Admin\Director\UpdateRequest;
use App\Repositories\Director\DirectorRepositoryInterface;
use App\Models\Director;
use Exception;

class DirectorController extends Controller
{
    protected $directorRepository;

    public function __construct(
        DirectorRepositoryInterface $directorRepository
    ) {
        $this->directorRepository = $directorRepository;
        $this->data['directors_all'] = $this->directorRepository->all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->data['directors_all'] = Director::paginate(5);
        return view('admin.contents.directors.table', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.contents.directors.create-index', $this->data);

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
        \DB::beginTransaction();
        try {
            $data = $request->only([
                'first_name',
                'last_name',
                'job',
                'gender',
                'height',
                'weight',
                'blood_group',
                'hobby',
                'country',
                'avatar',
                'status',
            ]);
            $this->directorRepository->create($data);
            \DB::commit();
            return redirect()->back()->with('status_s', 'Đã lưu dữ liệu thành công');
        } catch (\Throwable $th) {
            \DB::rollback();
            return redirect()->back()->with('status_d', 'Không thể thực hiện ! Đã có lỗi xảy ra.');
        }
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
        try {
            $this->data['directors'] = $this->directorRepository->find($id);
                return view('admin.contents.directors.edit', $this->data);
            
        } catch (Exception $exception) {
            return view('admin.errors.404');
        }
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
        try {
            $this->directorRepository->find($id);
            $data = [
                'first_name'  => $request['first_name'],
                'last_name'   => $request['last_name'],
                'job'         => $request['job'],
                'gender'      => $request['gender'],
                'height'      => $request['height'],
                'weight'      => $request['weight'],
                'blood_group' => $request['blood_group'],
                'hobby'       => $request['hobby'],
                'country'     => $request['country'],
                'avatar'      => $request['job'],
                'status'      => $this->directorRepository->checkStatus($request['status']),
            ];
            $this->directorRepository->update($data, $id);
            \DB::commit();
            return redirect()->route('directors.index')->with('status_s', 'Đã cập nhật thành công !');
        } catch (Exception $exception) {
            \DB::rollback();
            return redirect()->back()->with('status_d', 'Không thể cập nhật ! Đã có lỗi xảy ra.');
        }
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
        \DB::beginTransaction();
        try {
            $directors = $this->directorRepository->find($id);
            $this->directorRepository->destroy($directors->id);
            \DB::commit();
            return redirect()->back()->with('status_p', 'Đã xóa thành công !');
        } catch (Exception $exception) {
            \DB::rollback();
            return redirect()->back()->with('status_d', 'Không thể xóa. Đã có lỗi xảy ra.');
        }
    }
}
