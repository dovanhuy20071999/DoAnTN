<?php

namespace App\Repositories\Criterion;

interface CriterionRepositoryInterface
{
  public function getCriterionForIelt();
  public function getCriterionForNormal();
}