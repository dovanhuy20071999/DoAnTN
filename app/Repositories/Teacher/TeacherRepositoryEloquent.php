<?php

namespace App\Repositories\Teacher;

use App\Repositories\RepositoryEloquent;

use App\Models\Teacher;
use App\Repositories\Teacher\TeacherRepositoryInterface;

class TeacherRepositoryEloquent extends RepositoryEloquent implements TeacherRepositoryInterface
{
  public function getModel()
    {
        return Teacher::class;
    }
}