<?php

namespace App\Repositories\Image;

use App\Repositories\RepositoryEloquent;
use App\Models\Image;
use App\Repositories\Image\ImageRepositoryInterface;

class ImageRepositoryEloquent extends RepositoryEloquent implements ImageRepositoryInterface
{
  public function getModel()
    {
        return Image::class;
    }
}