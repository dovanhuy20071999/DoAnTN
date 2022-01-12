<?php

namespace App\Repositories\Test;

interface TestRepositoryInterface
{
  public function getTestByTopic($id);
  public function getTestById($id);
  public function getTestForAdmin();
}