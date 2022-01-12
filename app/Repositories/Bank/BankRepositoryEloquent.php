<?php

namespace App\Repositories\Bank;

use App\Repositories\RepositoryEloquent;
use App\Models\Bank;
use App\Repositories\Bank\BankRepositoryInterface;

class BankRepositoryEloquent extends RepositoryEloquent implements BankRepositoryInterface
{
    public function getModel()
    {
        return Bank::class;
    }

    public function getBankByUserId($id)
    {
        $result = $this->_model
                            ->where('user_id', $id)
                            ->get();

        return $result;
    }
}