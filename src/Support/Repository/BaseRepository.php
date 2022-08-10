<?php
declare(strict_types=1);

namespace Support\Repository;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Support\Repository\Interfaces\EloquentRepositoryInterface;

abstract class BaseRepository implements EloquentRepositoryInterface
{
    protected Model $model;

    public function all(array $columns = ['*'], array $relations = []): Collection
    {
        return $this->model->with($relations)->get($columns);
    }

    public function findById(
        int $modelId,
        array $columns = ['*'],
        array $relations = [],
        array $appends = []
    ): ?Model {
        return $this->model->select($columns)->with($relations)->findOrFail($modelId)->append($appends);
    }

    public function deleteById(int $modelId): bool
    {
        return $this->findById($modelId)->delete();
    }
}
