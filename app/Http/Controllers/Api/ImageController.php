<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\Image\ImageRepositoryInterface;
use Illuminate\Http\Request;

class ImageController extends BaseController
{
    protected $imageRepository;

    public function __construct(ImageRepositoryInterface $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    public function store(Request $request)
    {
        if ($request->image) {
            $ext = $request->image->extension();
            if ($ext == 'png' || $ext == 'jpg' || $ext == 'jpeg') {
                $data = file_get_contents($request->image);
                $base64= base64_encode($data);
                $image = [
                    'base64' => $base64,
                ];
                $result = $this->imageRepository->create($image);
                //return response()->json($base64);
                if ($result) {
                    return $this->sendSuccessResponse();
                }
            }
            return $this->sendError(__('app.not_image'));
        }
        return $this->sendError(__('app.choose_image'));
    }
}
