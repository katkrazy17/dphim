<?php

namespace App\Http\Controllers\V1\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Tag\TagRepositoryInterface;
use App\Http\Requests\V1\Admin\Tag\StoreRequest;
use App\Http\Requests\V1\Admin\Tag\UpdateRequest;
use Exception;

class TagController extends Controller
{

    protected $tagRepository;

    public function __construct(TagRepositoryInterface $tagRepository)
    {
        $this->tagRepository = $tagRepository;
        $this->data['tags_all'] = $this->tagRepository->orderBy('created_at', 'DESC');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.contents.tags.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contents.tags.create', $this->data);
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
                'name',
                'status'
            ]);
            $this->tagRepository->create($data);
            \DB::commit();  
            return redirect()->route('tags.create')->with('status_s', 'Đã lưu dữ liệu thành công');          
        } catch (Exception $exception) {
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
    public function edit($slug)
    {
        try {
            $this->data['tags'] = $this->tagRepository->findBySlugOrFail($slug);
            return view('admin.contents.tags.edit', $this->data);
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
    public function update(UpdateRequest $request, $slug)
    {
        \DB::beginTransaction();
        try {
            $data = [
                'name' => $request['name'],
                'slug' => str_slug($request['name']),
                'status' => $this->tagRepository->checkStatus($request['status']),
            ];
            $this->tagRepository->update($data, $slug);
            \DB::commit();
            return redirect()->route('tags.index')->with('status_s', 'Đã cập nhật thành công !');
        } catch (Exception $exception) {
            \DB::rollback();
            return redirect()->back()->with('status_d', 'Không thể thực hiện ! Đã có lỗi xảy ra.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        \DB::beginTransaction();
        try {
            $tag_id = $this->tagRepository->findBySlugOrFail($slug);
            $this->tagRepository->destroy($tag_id->id);
            \DB::commit();
            return redirect()->route('tags.index')->with('status_p', 'Đã xóa thành công !');
        } catch (Exception $exception) {
            \DB::rollback();
            return redirect()->back()->with('status_d', 'Không thể xóa. Đã có lỗi xảy ra.');
        }
    }
}
