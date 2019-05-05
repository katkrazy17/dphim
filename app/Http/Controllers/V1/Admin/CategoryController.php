<?php

namespace App\Http\Controllers\V1\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Admin\Category\StoreRequest;
use App\Http\Requests\V1\Admin\Category\UpdateRequest;
use App\Repositories\Category\CategoryRepositoryInterface;
use Exception;

class CategoryController extends Controller
{

    protected $categoryRepository;

    public function __construct(
        CategoryRepositoryInterface $categoryRepository
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->data['categories_all'] = $this->categoryRepository->whereNull('parent_id', 'name');
        $this->data['categories_parent'] = $this->categoryRepository->whereNull('parent_id', 'name')->where('status', '1');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.contents.categories.create-index', $this->data);
    }

    public function childs()
    {
        return view('admin.contents.categories.createchild-index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
                'parent_id',
            ]);
            $this->categoryRepository->create($data);
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
    public function edit($slug)
    {
        try {
            $this->data['categories'] = $this->categoryRepository->findBySlugOrFail($slug);
            if ($this->data['categories']->parent_id == null) {
                return view('admin.contents.categories.edit', $this->data);
            }
            return view('admin.contents.categories.editchild', $this->data);
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
            $this->categoryRepository->findBySlugOrFail($slug);
            $data = [
                'name' => $request['name'],
                'slug' => str_slug($request['name']),
                'parent_id' => $request['parent_id'],
                'status' => $this->categoryRepository->checkStatus($request['status']),
            ];
            $this->categoryRepository->update($data, $slug);
            \DB::commit();
            return redirect()->route('categories.index')->with('status_s', 'Đã cập nhật thành công !');
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
    public function destroy($slug)
    {
        \DB::beginTransaction();
        try {
            $categories = $this->categoryRepository->findBySlugOrFail($slug);
            $categories->childs()->delete();
            $this->categoryRepository->destroy($categories->id);
            \DB::commit();
            return redirect()->back()->with('status_p', 'Đã xóa thành công !');
        } catch (Exception $exception) {
            \DB::rollback();
            return redirect()->back()->with('status_d', 'Không thể xóa. Đã có lỗi xảy ra.');
        }
    }
}
