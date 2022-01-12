<?php

namespace App\Repositories\Order;

use App\Repositories\RepositoryEloquent;
use App\Models\Order;
use App\Repositories\Order\OrderRepositoryInterface;

class OrderRepositoryEloquent extends RepositoryEloquent implements OrderRepositoryInterface
{
  public function getModel()
    {
        return Order::class;
    }

  public function getMyEssay($user_id)
  {
      $result = $this->_model
                            ->where('orders.user_id', $user_id)
                            ->joinActive()
                            ->selectActive()
                            ->get();

      return $result;
  }

  public function getOrder()
  {
      $result = $this->_model
                            ->joinActive()
                            ->selectActive()
                            ->get();

      return $result;
  }
}