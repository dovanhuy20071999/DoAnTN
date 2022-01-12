<?php

namespace App\Repositories\Criterion;

use App\Repositories\RepositoryEloquent;
use App\Models\Criterion;
use App\Repositories\Criterion\CriterionRepositoryInterface;

class CriterionRepositoryEloquent extends RepositoryEloquent implements CriterionRepositoryInterface
{
    public function getModel()
    {
        return Criterion::class;
    }

    public function getCriterionForIelt()
    {
      $result = $this->_model
                            ->where('level_id', 2)
                            ->get();

      return $result;
    }

    public function getCriterionForNormal()
    {
      $result = $this->_model
                            ->where('level_id', 1)
                            ->get();

      return $result;
    }
}