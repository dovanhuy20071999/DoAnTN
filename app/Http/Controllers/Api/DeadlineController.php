<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DeadlineCollection;
use App\Http\Resources\DeadlineResource;
use App\Repositories\Deadline\DeadlineRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Exception;

class DeadlineController extends BaseController
{
    protected $deadlineRepository;

    public function __construct(DeadlineRepositoryInterface $deadlineRepository)
    {
        $this->deadlineRepository = $deadlineRepository;
    }

    public function rules()
    {
        return [
            'deadline_name' => 'required|string',
            'deadline_price' => 'required|integer',
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $deadline = $this->deadlineRepository->getAll();
            if ($deadline) {
                return $this->sendSuccessResponse(new DeadlineCollection($deadline));
            }
            return $this->sendError(__('app.not_data'));
       } catch (Exception $e) {
           return $this->sendError(__('app.system_error'));
       }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
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
            $deadline = $this->deadlineRepository->create($request->all());
            if ($deadline) {
                return $this->sendSuccessResponse();
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
        //
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
            $rules = $this->rules();
            $validator = Validator::make($request->all(), $rules);
            $error = $validator->errors();
            if ($error->first()) {
                return $this->sendError($error->first());
            }
            $deadline_updated = $this->deadlineRepository->update($id, $request->all());
            if ($deadline_updated) {
                return $this->sendSuccessResponse(new DeadlineResource($deadline_updated));
            }
            return $this->sendError(__('app.system_error'));
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
            $deadline_delete = $this->deadlineRepository->find($id);
            if (!$deadline_delete) {
                return $this->sendError(__('app.not_data'));
            }
            $result = $this->deadlineRepository->delete($id);
            if ($result) {
                return $this->sendSuccessResponse();
            }
            return $this->sendError(__('app.system_error'));
        } catch (Exception $e) {
            return $this->sendError(__('app.system_error'));
        }
    }
}
