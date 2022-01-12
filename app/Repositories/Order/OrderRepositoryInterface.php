<?php

namespace App\Repositories\Order;

interface OrderRepositoryInterface
{
  public function getMyEssay($user_id);
  public function getOrder();
}