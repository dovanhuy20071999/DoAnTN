<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderAdminCollection;
use App\Http\Resources\OrderCollection;
use App\Http\Resources\OrderResource;
use App\Repositories\Essay\EssayRepositoryInterface;
use App\Repositories\Order\OrderRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;
use JWTAuth;
use Exception;

class OrderController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $orderRepository;
    protected $essayRepository;

    public function __construct(
        OrderRepositoryInterface $orderRepository,
        EssayRepositoryInterface $essayRepository)
    {
        $this->orderRepository = $orderRepository;
        $this->essayRepository = $essayRepository;
    }

    public function getMyEssay($user_id)
    {
         try {
            $listMyEssay = $this->orderRepository->getMyEssay($user_id);
            // dd($listMyEssay);
            if (!$listMyEssay) {
                return $this->sendError(__('app.not_data'));
            }
            
            return $this->sendSuccessResponse(new OrderCollection($listMyEssay));
        } catch (Exception $e) {
            return $this->sendError(__('app.system_error'));
        }
    }

    public function getOrder()
    {
        //  try {
            $listMyEssay = $this->orderRepository->getOrder();
            // dd($listMyEssay);
            if (!$listMyEssay) {
                return $this->sendError(__('app.not_data'));
            }
            
            return $this->sendSuccessResponse(new OrderAdminCollection($listMyEssay));
        // } catch (Exception $e) {
        //     return $this->sendError(__('app.system_error'));
        // }
    }

    public function index()
    {
        //
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
            // $user = JWTAuth::user();
            // $user_id = $user->id;

            //luu data vao table essay
            $dataEssay = [
                'user_id' => $request->user_id,
                'type_id' => $request->type_id,
                'status' => 0,
                'content' => $request->content,
            ];
            $essay = $this->essayRepository->create($dataEssay);
            if (!$essay) {
                return $this->sendError(__('app.not_data'));
            }
            // return $this->sendSuccessResponse();
            $essay_id = $essay->id;
            $send_date = Carbon::now()->toDateString();
            $dataOrder = [
                'user_id' => $request->user_id,
                'status' => 0,
                'send_date' => $send_date,
                'essay_id' => $essay_id,
                'test_id' => $request->test_id,
                'deadline_id' => $request->deadline_id,
                'type_id' => $request->type_id,
                'total_price' => $request->total_price,
            ];

            $order = $this->orderRepository->create($dataOrder);
            if (!$order) {
                return $this->sendError(__('app.system_error'));
            }

            return $this->sendSuccessResponse();

            
            // $request->request->add([
            //     // 'user_id' => $user_id,
            //     'status' => 0,
            //     'send_date' => $send_date,
            //     'essay_id' => 1,
            //     'level_id' => 1,
            //     'type_id' => 1
            // ]);
            // $order = $this->orderRepository->create($request->all());
            // if ($order) {
            //     return $this->sendSuccessResponse();
            // }
        
            // return $this->sendError(__('app.system_error'));
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
