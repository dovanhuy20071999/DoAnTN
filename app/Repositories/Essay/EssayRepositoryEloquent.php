<?php

namespace App\Repositories\Essay;

use App\Repositories\RepositoryEloquent;
use App\Models\Essay;
use App\Repositories\Essay\EssayRepositoryInterface;

class EssayRepositoryEloquent extends RepositoryEloquent implements EssayRepositoryInterface
{
    public function getModel()
    {
        return Essay::class;
    }

    public function getEssayByUserId($id)
    {
        $result = $this->_model
                              ->where('user_id', $id)
                              ->get();
        
        return $result;
    }

    public function getEssayForAdmin()
    {
        $result = $this->_model
                            ->joinActive()
                            ->selectActive()
                            ->get();

        return $result;
    }
}