<?php

namespace App\Http\Controllers\V1\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Admin\Actor\StoreRequest;
use App\Http\Requests\V1\Admin\Actor\UpdateRequest;
use App\Repositories\Actor\ActorRepositoryInterface;
use App\Models\Actor;
use Exception;


class ActorController extends Controller
{
    public function get_home(Request $request){
        if($request->ajax() || 'NULL'){
            $actors = $this->actorRepository->all();
            return view('admin.contents.actors.table',compact('actors'));
        }
    }
    protected $actorRepository;

    public function __construct(
        ActorRepositoryInterface $actorRepository
    ) {
        $this->actorRepository = $actorRepository;
        $this->data['actors_all'] = $this->actorRepository->all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->data['actors_all'] = Actor::paginate(5);
        return view('admin.contents.actors.table', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.contents.actors.create-index', $this->data);

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
            $this->actorRepository->create($data);
            \DB::commit();
            return redirect()->back()->with('status_s', 'Đã lưu dữ liệu thành công');
        }   catch (\Throwable $th) {
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
            $this->data['actors'] = $this->actorRepository->find($id);
                return view('admin.contents.actors.edit', $this->data);
            
        }   catch (Exception $exception) {
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
            $this->actorRepository->find($id);
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
                'status'      => $this->actorRepository->checkStatus($request['status']),
            ];
            $this->actorRepository->update($data, $id);
            \DB::commit();
            return redirect()->route('actors.index')->with('status_s', 'Đã cập nhật thành công !');
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
            $actors = $this->actorRepository->find($id);
            $this->actorRepository->destroy($actors->id);
            \DB::commit();
            return redirect()->back()->with('status_p', 'Đã xóa thành công !');
        } catch (Exception $exception) {
            \DB::rollback();
            return redirect()->back()->with('status_d', 'Không thể xóa. Đã có lỗi xảy ra.');
        }
    }
}
