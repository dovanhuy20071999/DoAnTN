<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use JWTAuth;

class UserController extends BaseController
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function rules()
    {
        return [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
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
            // $user = JWTAuth::user();
            // $user_role = $user->role;
            // if ($user_role !== 0) {
            //     return $this->sendError(__('app.not_permission'));
            // }
            $users = $this->userRepository->getAll();
            if (!$users) {
                return $this->sendError(__('app.not_data'));
            }
            return $this->sendSuccessResponse(new UserCollection($users));
            
        } catch (Exception $e) {
            return $this->sendError(__('app.system_error'));
        }
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
            $errors = $validator->errors();
            if ($errors->first()) {
                return $this->sendError($errors->first(), Response::HTTP_NOT_IMPLEMENTED);
            }
            $request->merge([
                'password' => Hash::make($request->password),
            ]);
            $request->request->add([
                'role' => 1,
            ]);
            $user = $this->userRepository->create($request->all());
            if (!$user) {
                return $this->sendError(__('app.not_data'), Response::HTTP_INTERNAL_SERVER_ERROR);
            }
            $token = JWTAuth::fromUser($user);
            $data = [
                'token' => $token,
            ];
            return $this->sendSuccessResponse($data);
        } catch (Exception $e) {
            return $this->sendError(__('app.system_error'), Response::HTTP_INTERNAL_SERVER_ERROR);
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
            $data = $this->userRepository->getInfoUserById($id);
            if (!$data) {
                return $this->sendError(__('app.not_data'));
            }

            return $this->sendSuccessResponse(new UserCollection($data));
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
            $user = $this->userRepository->find($id);
            if (!$user) {
                return $this->sendError(__('app.not_data'));
            }
            $user_update = $this->userRepository->update($id, $request->all());
            if ($user_update) {
                $result = $this->userRepository->getInfoUserById($user_update->id);
                return $this->sendSuccessResponse(new UserCollection($result));
            }
            return $this->sendError(__('app.not_data'));
        }
        catch (Exception $e) {
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
            // $user = JWTAuth::user();
            // $user_role = $user->role;
            // if ($user_role !== 0) {
            //     return $this->sendError(__('app.not_permission'));
            // } else {
                $user = $this->userRepository->getInfoUserById($id);
                if (!$user) {
                    return $this->sendError(__('app.not_data'));
                } else {
                    $result = $this->userRepository->delete($id);
                    if ($result) {
                        return $this->sendSuccessResponse();
                    } else {
                        return $this->sendError(__('app.not_data'));
                    }
                }
            //}
        } catch (Exception $e) {
            return $this->sendError(__('app.system_error'));
        }
    }
}
