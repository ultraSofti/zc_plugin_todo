<?php

namespace App\Repositories\HTTP;

use App\Contracts\RepositoryInterface;
use Illuminate\Support\Facades\Http;

class HTTPRepository implements RepositoryInterface
{
    protected $url = 'https://zccore.herokuapp.com/';
    protected $organisation_id = '612a3a914acf115e685df8e3';
    protected $plugin_id = '612e0c38a560ba3687c9ae4b';
    protected $modelName;
    protected $model;

    public function __construct($modelName)
    {
        $this->modelName = $modelName;
        $this->model = new Http();
    }

    public function all()
    {
        return $this->model::get($this->url . 'data/read/' . $this->plugin_id .'/'. $this->modelName . '/' . $this->organisation_id)->json();
    }

    public function find($id, $attributes = ['*'])
    {
        return $this->model::get($this->url . 'data/read/' . $this->plugin_id .'/'. $this->modelName . '/' . $this->organisation_id)->json();
    }

    public function findOrFail($id, $attributes = ['*'])
    {
        // TODO: Implement findOrFail() method.
    }

    public function findOrNew($id, $attributes = ['*'])
    {
        // TODO: Implement findOrNew() method.
    }

    public function findBy($attribute, $value, $attributes = ['*'])
    {
        // TODO: Implement findBy() method.
    }

    public function findFirst($attributes = ['*'])
    {
        // TODO: Implement findFirst() method.
    }

    public function findAll($attributes = ['*'])
    {
        // TODO: Implement findAll() method.
    }

    public function paginate($perPage = null, $attributes = ['*'], $pageName = 'page', $page = null)
    {
        // TODO: Implement paginate() method.
    }

    public function simplePaginate($perPage = null, $attributes = ['*'], $pageName = 'page')
    {
        // TODO: Implement simplePaginate() method.
    }

    public function findWhere(array $where, $attributes = ['*'])
    {
        // TODO: Implement findWhere() method.
    }

    public function findWhereIn(array $where, $attributes = ['*'])
    {
        // TODO: Implement findWhereIn() method.
    }

    public function findWhereNotIn(array $where, $attributes = ['*'])
    {
        // TODO: Implement findWhereNotIn() method.
    }

    public function findWhereHas(array $where, $attributes = ['*'])
    {
        // TODO: Implement findWhereHas() method.
    }

    public function create(array $attributes = [], bool $syncRelations = false)
    {
        return $this->model::post($this->url . 'data/write', [
            "plugin_id" => $this->plugin_id,
            "organization_id" => $this->organisation_id,
            "collection_name" => $this->modelName,
            "bulk_write" => false,
            "object_id" => "xxxx",
            "filter" => (object) [],
            "payload" => $attributes
        ])->json();
    }

    public function update($id, array $attributes = [], bool $syncRelations = false)
    {
        return $this->model::post($this->url . 'data/write', [
            "plugin_id" => $this->plugin_id,
            "organization_id" => $this->organisation_id,
            "collection_name" => $this->modelName,
            "bulk_write" => false,
            "object_id" => $id,
            "filter" => (object) [],
            "payload" => $attributes
        ])->json();
    }

    public function store($id, array $attributes = [], bool $syncRelations = false)
    {
        return $this->model::post($this->url . 'data/write', [
            "plugin_id" => $this->plugin_id,
            "organization_id" => $this->organisation_id,
            "collection_name" => $this->modelName,
            "bulk_write" => false,
            "object_id" => "xxxx",
            "filter" => (object) [],
            "payload" => $attributes
        ])->json();
    }

    public function delete($id)
    {
        return $this->model::post($this->url . 'data/write', [
            "plugin_id" => $this->plugin_id,
            "organization_id" => $this->organisation_id,
            "collection_name" => $this->modelName,
            "bulk_write" => false,
            "object_id" => $id,
            "filter" => (object) [],
            "payload" =>(object) []
        ])->json();
    }

    public function restore($id)
    {
        // TODO: Implement restore() method.
    }
}
