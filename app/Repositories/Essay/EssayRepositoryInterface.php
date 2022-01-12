<?php

namespace App\Repositories\Essay;

interface EssayRepositoryInterface
{
  public function getEssayByUserId($id);
  public function getEssayForAdmin();
}