<?php


namespace App\Repositories;


use Illuminate\Database\Eloquent\Builder;

interface RepositoryInterface
{

    public function all();

    public function paginate();

    public function store(array $data);

    public function update(array $data, $id);

    public function delete($id, Builder $relationships);

    public function getById($id);

    public function findBy($column, $value);
}
