<?php
namespace Support\Repository\Interfaces;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface EloquentRepositoryInterface
{
    public function all(array $columns = ['*'], array $relations = []): Collection;

    public function findById(int $modelId, array $columns = ['*'], array $relations = [], array $appends = []): ?Model;

    public function deleteById(int $modelId): bool;
}
