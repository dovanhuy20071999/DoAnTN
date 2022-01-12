<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CriterionCollection;
use App\Repositories\Criterion\CriterionRepositoryInterface;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Exception;

class CriterionController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $criterionRepository;

    public function __construct(CriterionRepositoryInterface $criterionRepository)
    {
        $this->criterionRepository = $criterionRepository;
    }

    public function getCriterionForIelt()
    {
        try {
            $criterion = $this->criterionRepository->getCriterionForIelt();
            if (!$criterion) {
                return $this->sendError(__('app.not_data'));
            }

            return $this->sendSuccessResponse(new CriterionCollection($criterion));
        } catch (Exception $e) {
            return $this->sendError(__('app.system_error'));
        }
    }

    public function getCriterionForNormal()
    {
        try {
            $criterion = $this->criterionRepository->getCriterionForNormal();
            if (!$criterion) {
                return $this->sendError(__('app.not_data'));
            }

            return $this->sendSuccessResponse(new CriterionCollection($criterion));
        } catch (Exception $e) {
            return $this->sendError(__('app.system_error'));
        }
    }

    public function index()
    {
        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
