<?php

namespace App\Repositories;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AppRepository implements RepositoryInterface
{
    private $builder, $filter_columns, $desc_order_by;

    public function __construct(Model $builder, array $filter_columns = [], string $desc_order_by = 'id')
    {
        $this->builder = $builder;
        $this->filter_columns = $filter_columns;
        $this->desc_order_by = $desc_order_by !== 'id' ? $desc_order_by : config('data.query.order_by');
    }

    public function getBuilder()
    {
        return $this->builder;
    }

    public function all()
    {
        return $this->query()->get();//this works
    }

    public function paginate()
    {
        return $this->query()->paginate(
            $this->loadPagination()
        );
    }

    public function store($data)
    {
        return $this->builder->create($data);
    }

    public function update($data, $id)
    {
        return DB::transaction(function () use ($id, $data) { // Start the transaction

            $builder_data = $this->getById($id);

            $builder_data->update($data);

            return $builder_data;
        }); // End transaction
    }

    public function delete($id, Builder $relationships)
    {
        return DB::transaction(function () use ($id, $relationships) { // Start the transaction

            $builder_data = $this->getById($id);

            foreach ($builder_data->getRelations() as $relationship)
                $relationship->delete();

            return $builder_data->delete();
        }); // End transaction
    }

    public function getById($id, $with = null)
    {
        if (!is_null($with))
            $this->with($with);

        return $this->builder->findOrFail($id);
    }

    public function findBy($column, $value)
    {
        return $this->builder->where($column, $value)->firstOrFail();
    }

    // Eager load database relationships
    public  function with($relations): \Illuminate\Database\Eloquent\Builder
    {
        return $this->builder = $this->builder->with($relations);
    }

    protected function query($first_query = null)
    {
        $loadOrderBy = $this->loadOrderBy();

        $query = $this->builder->orderBy($loadOrderBy[0], $loadOrderBy[1]);

        if (!is_null($first_query))
            $query->where($first_query);

        // get query string
        $q = request()->query('q');

        /**
         * if query string is provided
         * and
         * filter columns are provided
         */
        if ($q && count($this->filter_columns))
        {
            $query->where(
                array_shift($this->filter_columns),
                'LIKE',
                "%{$q}%"
            );
            foreach ($this->filter_columns as $column)
                $query->orWhere(
                    $column,
                    'LIKE',
                    "%{$q}%"
                );
        }

        return $query;
    }

    protected function loadPagination()
    {
        $paginate = request()->query('paginate');

        $config_paginate = config('data.query.paginate');

        return is_numeric($paginate) && $paginate > 0 && $paginate <= $config_paginate * 4
            ?
            $paginate
            :
            $config_paginate;

    }

    protected function loadOrderBy(): array
    {
        $order_by_column =
            in_array(
                request()->query('order_by_column'), array_merge($this->builder->getModel()->getFillable(), ['created_at', 'updated_at']), true
            )
                ?
                request()->query('order_by_column')
                :
                $this->desc_order_by;

        $order_by_order =
            in_array(
                request()->query('order_by'), ['desc', 'asc'], true
            )
                ?
                request()->query('order_by')
                :
                config('data.query.order');

        return [$order_by_column, $order_by_order];
    }
}
