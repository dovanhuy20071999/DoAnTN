<?php

namespace App\Repositories\Type;

interface TypeRepositoryInterface
{
  public function getTypeByLevelId($level_id);
}