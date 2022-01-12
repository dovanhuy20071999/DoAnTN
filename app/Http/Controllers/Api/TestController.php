<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TestCollection;
use App\Http\Resources\TestForAdminCollection;
use App\Http\Resources\TestForAdminResource;
use App\Http\Resources\TestResource;
use App\Repositories\Test\TestRepositoryInterface;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $testRepository;

    public function __construct(TestRepositoryInterface $testRepository)
    {
        $this->testRepository = $testRepository;
    }

    public function rules()
    {
        return [
            'question' => 'required|string',
        ];
    }

    public function getTestByTopic($id)
    {
        try {
            $test = $this->testRepository->getTestByTopic($id);
            if (!$test) {
                return $this->sendError(__('app.not_data'));
            }
            return $this->sendSuccessResponse(new TestCollection($test));
        } catch (Exception $e) {
            return $this->sendError(__('app.system_error'));
        }
    }
    
    public function index()
    {
        // try {
            $tests = $this->testRepository->getTestForAdmin();
            if (!$tests) {
                return $this->sendError(__('app.not_data'));
            }

            return $this->sendSuccessResponse(new TestForAdminCollection($tests));
        // } catch (Exception $e) {
        //     return $this->sendError(__('app.not_data'));
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
            $rule = $this->rules();
            $validator = Validator::make($request->all(), $rule);
            $error = $validator->errors();
            if ($error->first()) {
                return $this->sendError(__($error->first()));
            }
            $test = $this->testRepository->create($request->all());
            if ($test) {
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
        $test = $this->testRepository->getTestById($id);
        if (!$test) {
            return $this->sendError(__('app.not_data'));
        }
        return $this->sendSuccessResponse(new TestCollection($test));
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
            $test_delete = $this->testRepository->find($id);
            if (!$test_delete) {
                return $this->sendError(__('app.not_data'));
            }
            $result = $this->testRepository->delete($id);
            if (!$result) {
                return $this->sendError(__('app.system_error'));
            }
            return $this->sendSuccessResponse();
        } catch (Exception $e) {
            return $this->sendError(__('app.system_error'));
        }
    }
}
