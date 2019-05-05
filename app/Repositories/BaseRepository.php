<?php

namespace App\Repositories;

use App\Repositories\RepositoryInterface;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Container\Container as App;
use Illuminate\Database\Model;

abstract class BaseRepository 
{
    protected $_model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function model();

    public function setModel()
    {
        $this->_model = app()->make(
            $this->model()
        );
    }
    public function create(array $attributes = [])
    {
        return $this->_model->create($attributes);
    }

    public function all()
    {
        return $this->_model->all();
    }

    public function getIdAdmin()
    {
        return Auth::guard('admin')->user()->id;
    }

    public function getAliasAdmin()
    {
        return Auth::guard()->user()->alias;
    }

    public function findBySlugOrFail($alias)
    {
        return $this->_model->findBySlugOrFail($alias);
    }

    public function update(array $attributes, $alias)
    {
        $model = $this->findBySlugOrFail($alias);
        return $model->update($attributes);
    }

    public function destroy($id)
    {
        return $this->_model->destroy($id);
    }

    public function paginate($limit = null, $columnOrderBy, $valueOrderBy)
    {
        return $this->_model->orderBy($columnOrderBy, $valueOrderBy)->paginate($limit);
    }

    public function paginateSearch($column, $search, $columnOrderBy, $valueOrderBy,  $paginate)
    {
        return $this->_model->where(
            $column,
            'like',
            '%' . $search . '%'
        )->orderBy(
            $columnOrderBy,
            $valueOrderBy
        )
        ->paginate($paginate);
    }

    public function pluck($column1, $column2)
    {
        return $this->_model->pluck($column1, $column2)->all();
    }

    public function whereIn($column, array $attributes)
    {
        return $this->_model->whereIn($column, $attributes)->get();
    }

    public function orderBy($column, $direction)
    {
        return $this->_model->orderBy($column, $direction)->get();
    }

    public function withOrderBy(array $relations, $column, $direction)
    {
        return $this->_model->with($relations)->orderBy($column, $direction)->get();
    }

    public function find($id)
    {
        return $this->_model->find($id);
    }

    public function insertGetId(array $attributes = [])
    {
        return $this->_model->insertGetId($attributes);
    }

    public function where($column, $value)
    {
        return $this->_model->where($column, $value)->get();
    }

    public function whereWith(array $relations, $column, $value)
    {
        return $this->_model->with($relations)->where($column, $value)->get();
    }
}
