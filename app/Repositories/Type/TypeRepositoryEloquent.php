<?php

namespace App\Repositories\Type;

use App\Repositories\RepositoryEloquent;
use App\Models\Type;
use App\Repositories\Type\TypeRepositoryInterface;

class TypeRepositoryEloquent extends RepositoryEloquent implements TypeRepositoryInterface
{
  public function getModel()
    {
        return Type::class;
    }
  
  public function getTypeByLevelId($level_id)
  {
      $result = $this->_model
                            ->where('level_id', $level_id)
                            ->get();

      return $result;    
  }
}