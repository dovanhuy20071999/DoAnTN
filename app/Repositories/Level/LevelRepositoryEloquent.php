<?php

namespace App\Repositories\Level;

use App\Repositories\RepositoryEloquent;

use App\Models\Level;
use App\Repositories\Level\LevelRepositoryInterface;

class LevelRepositoryEloquent extends RepositoryEloquent implements LevelRepositoryInterface
{
  public function getModel()
    {
        return Level::class;
    }
}