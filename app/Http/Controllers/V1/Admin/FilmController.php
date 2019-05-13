<?php

namespace App\Http\Controllers\V1\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Admin\Film\StoreRequest;
use App\Http\Requests\V1\Admin\Film\UpdateRequest;
use App\Repositories\Film\FilmRepositoryInterface;
use Exception;

class FilmController extends Controller
{
    protected $filmRepository;

    public function __construct(
        FilmRepositoryInterface $filmRepository
    ) {
        $this->filmRepository = $filmRepository;
        $this->data['films_all'] = $this->filmRepository->all();
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
        \DB::beginTransaction();
        try {
            $data = $request->only([                
                'title',
                'title_eng',
                'description',
                'avatar',
                'content',
                'release_date',
                'run_time',
                'quality',
                'resolution',
                'language',
                'viewed',
                'distributor',
                'director_id',
                'status',
            ]);
            $this->filmRepository->create($data);
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
            $this->data['films'] = $this->filmsRepository->find($id);
                return view('admin.contents.films.edit', $this->data);
            
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
        \DB::beginTransaction();
        try {
            $this->advertisementRepository->find($id);
            $data = [
                'title'       => $request['title'],
                'title_eng'   => $request['title_eng'],
                'description' => $request['description'],
                'position'    => $request['position'],
                'avatar'      => $request['avatar'],
                'content'     => $request['content'],
                'release_date'=> $request['release_date'],
                'run_time'    => $request['run_time'],
                'quality'     => $request['quality'],
                'resolution'  => $request['resolution'],
                'language'    => $request['language'],
                'viewed'      => $request['viewed'],
                'distributor' => $request['distributor'],
                'director_id' => $request['director_id'],
                'status'      => $this->advertisementRepository->checkStatus($request['status']),
            ];
            $this->advertisementRepository->update($data, $id);
            \DB::commit();
            return redirect()->route('advertisements.index')->with('status_s', 'Đã cập nhật thành công !');
        } 
            catch (Exception $exception) 
            {
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
            $films = $this->filmRepository->find($id);
            $this->filmRepository->destroy($films->id);
            \DB::commit();
            return redirect()->back()->with('status_p', 'Đã xóa thành công !');
        } catch (Exception $exception) {
            \DB::rollback();
            return redirect()->back()->with('status_d', 'Không thể xóa. Đã có lỗi xảy ra.');
        }
    }
}
