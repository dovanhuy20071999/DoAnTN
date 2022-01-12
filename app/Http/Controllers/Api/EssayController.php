<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EssayCollection;
use App\Http\Resources\EssayForAdminCollection;
use App\Http\Resources\EssayForAdminResource;
use App\Http\Resources\EssayResource;
use App\Repositories\Essay\EssayRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;

class EssayController extends BaseController
{
    protected $essayRepository;
    
    public function __construct(EssayRepositoryInterface $essayRepository)
    {
        $this->essayRepository = $essayRepository;
    }

    public function rules()
    {
        return [
            'content' => 'required|string',
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEssayByUserId($id)
    {
        try {
            $essays = $this->essayRepository->getEssayByUserId($id);
            if (count($essays) == 0) {
                return $this->sendError(__('app.not_data'));
            }
            return $this->sendSuccessResponse(new EssayCollection($essays));
        } catch (Exception $e) {
            return $this->sendError(__('app.system_error'));
        }
    }

    //get essay for teacher to mark
    public function getEssayToMark($id)
    {
        try {
            $essays = $this->essayRepository->getEssayToMark($id);
            if (!$essays) {
                return $this->sendError(__('app.not_data'));
            }

            // return $this->sendSuccessResponse(new );
        } catch (Exception $e) {
            return $this->sendError(__('app.system_error'));
        }
    }

    public function index()
    {
        // try {
            $essay = $this->essayRepository->getEssayForAdmin();
            if (!$essay) {
                return $this->sendError(__('app.not_data'));
            }

            return $this->sendSuccessResponse(new EssayForAdminCollection($essay));
        // } catch (Exception $e) {
        //     return $this->sendError(__('app.system_error'));
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $rules = $this->rules();
            $validator = Validator::make($request->all(), $rules);
            $errors = $validator->errors();
            if ($errors->first()) {
                return $this->sendError($errors->first());
            }
            $time = Carbon::now();
            $request->request->add([
                'created_at' => $time,
            ]);
            $essay = $this->essayRepository->create($request->all());
            if ($essay) {
            return $this->sendSuccessResponse(__('app.success'));
            } 
            return $this->sendError(__('app.system_error'));
        } catch (Exception $e) {
            return $this->sendError(__('app.system_error'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $essay = $this->essayRepository->find($id);
            if ($essay) {
                return $this->sendSuccessResponse(new EssayResource($essay));
            }
            return $this->sendError(__('app.not_data'));
        } catch (Exception $e) {
            return $this->sendError(__('app.system_error'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $essay = $this->essayRepository->find($id);
            if (!$essay) {
                return $this->sendError(__('app.not_data'));
            }
            $rule = $this->rules();
            $validator = Validator::make($request->all(), $rule);
            $error = $validator->errors();
            if ($error->first()) {
                return $this->sendError($error->first());
            }
            $time = Carbon::now();
            $request->request->add([
                'updated_at' => $time,
            ]);
            $essay_updated = $this->essayRepository->update($id, $request->all());
            if (!$essay_updated) {
                return $this->sendError(__('app.system_error'));
            }
            return $this->sendSuccessResponse(new EssayResource($essay_updated));
        } catch (Exception $e) {
            return $this->sendError(__('app.system_error'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $essay_delete = $this->essayRepository->find($id);
            if (!$essay_delete) {
                return $this->sendError(__('app.not_data'));
            }
            $result = $this->essayRepository->delete($id);
            if (!$result) {
                return $this->sendError(__('app.system_error'));
            }
            return $this->sendSuccessResponse();
        } catch (Exception $e) {
            return $this->sendError(__('app.system_error'));
        }
    }
}
