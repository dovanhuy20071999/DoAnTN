<?php

namespace App\Repositories\Bank;

interface BankRepositoryInterface
{
  public function getBankByUserId($id);
}