<?php

namespace App\Repositories;

interface BaseInterface
{
    public function create(array $attributes = []);

    public function all();

    public function getIdAdmin();

    public function getAliasAdmin();

    public function findBySlugOrFail($alias);

    public function destroy($id);

    public function update(array $attributes, $alias);

    public function paginateSearch($column, $search, $columnOrderBy, $valueOrderBy,  $paginate);

    public function paginate($limit = null, $columnOrderBy, $valueOrderBy);

    public function pluck($column1, $column2);

    public function whereIn($column, array $attributes);

    public function orderBy($column, $direction);

    public function withOrderBy(array $relations, $column, $direction);

    public function find($id);

    public function insertGetId(array $attributes = []);

    public function where($column, $value);

    public function whereWith(array $relations, $column, $value);
}

