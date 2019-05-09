<?php

namespace App\Http\Controllers\V1\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Admin\Advertisement\StoreRequest;
use App\Http\Requests\V1\Admin\Advertisement\UpdateRequest;
use App\Repositories\Advertisement\AdvertisementRepositoryInterface;
use Exception;

class AdvertisementController extends Controller
{
    protected $advertisementRepository;

    public function __construct(
        AdvertisementRepositoryInterface $advertisementRepository
    ) {
        $this->advertisementRepository = $advertisementRepository;
        $this->data['advertisements_all'] = $this->advertisementRepository->all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.contents.advertisements.create-index', $this->data);
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
    public function store(StoreRequest $request)
    {
        \DB::beginTransaction();
        try {
            $data = $request->only([
                'distributor',
                'link',
                'position',
            ]);
            $this->advertisementRepository->create($data);
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
        
        try {
            $this->data['advertisements'] = $this->advertisementRepository->find($id);
                return view('admin.contents.advertisements.edit', $this->data);
            
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
    public function update(UpdateRequest $request, $id)
    {
        \DB::beginTransaction();
        try {
            $this->advertisementRepository->find($id);
            $data = [
                'distributor' => $request['distributor'],
                'link' => $request['link'],
                'position' => $request['position'],
                'status' => $this->advertisementRepository->checkStatus($request['status']),
            ];
            $this->advertisementRepository->update($data, $id);
            \DB::commit();
            return redirect()->route('advertisements.index')->with('status_s', 'Đã cập nhật thành công !');
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
        \DB::beginTransaction();
        try {
            $advertisements = $this->advertisementRepository->find($id);
            $this->advertisementRepository->destroy($advertisements->id);
            \DB::commit();
            return redirect()->back()->with('status_p', 'Đã xóa thành công !');
        } catch (Exception $exception) {
            \DB::rollback();
            return redirect()->back()->with('status_d', 'Không thể xóa. Đã có lỗi xảy ra.');
        }
    }
}
