<?php

namespace App\Repositories\Rate;

use App\Repositories\RepositoryEloquent;
use App\Models\Rate;
use App\Repositories\Rate\RateRepositoryInterface;

class RateRepositoryEloquent extends RepositoryEloquent implements RateRepositoryInterface
{
  public function getModel()
    {
        return Rate::class;
    }
}