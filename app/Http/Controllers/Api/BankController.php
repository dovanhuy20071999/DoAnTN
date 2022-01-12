<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BankCollection;
use App\Repositories\Bank\BankRepositoryInterface;
use Exception;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class BankController extends BaseController
{
    protected $bankRepository; 

    public function __construct(BankRepositoryInterface $bankRepository)
    {
        $this->bankRepository = $bankRepository;
    }

    public function getAll()
    {
        try {
            $bank = $this->bankRepository->getAll();
            if (!$bank) {
                return $this->sendError(__('app.not_data'));
            }

            return $this->sendSuccessResponse(new BankCollection($bank));
        } catch (Exception $e) {
            return $this->sendError(__('app.system_error'));
        }
    }

    public function getBankByUserId($id)
    {
        try {
            $bank = $this->bankRepository->getBankByUserId($id);
            if (!$bank) {
                return $this->sendError(__('app.not_data'), Response::HTTP_NOT_FOUND);
            }

            return $this->sendSuccessResponse(new BankCollection($bank));
        } catch (Exception $e) {
            return $this->sendError(__('app.system_error'), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function addCart(Request $request)
    {
        try {
            $dataBankCard = [
                'user_id' => $request->user_id,
                'bank_name' => $request->bank_name,
                'money' => 800000,
                'card_number' => $request->card_number,
            ];
    
            $bank = $this->bankRepository->create($dataBankCard);
            if (!$bank) {
                return $this->sendError(__('app.system_error'));
            }
            return $this->sendSuccessResponse();
    
        } catch (Exception $e) {
            return $this->sendError(__('app.system_error'));
        }
    }
}
