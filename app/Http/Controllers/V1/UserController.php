<?php

namespace App\Http\Controllers\V1;

use App\Http\Requests\V1\User\IndexRequest;
use App\Http\Requests\V1\User\StoreRequest;
use App\Http\Resources\V1\UserCollection;
use App\Http\Resources\V1\UserResource;
use App\Models\User;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Index
     *
     * @param IndexRequest $request
     * @return UserCollection
     * @responseFile storage/responses/users.index.json
     */
    public function index(IndexRequest $request)
    {
        $queryBuilder = User::query();

        if ($request->has('search')) {
            $search = '%' . $request->get('search') . '%';
            $queryBuilder->where('name', 'LIKE', $search)
                ->orWhere('email', 'LIKE', $search);
        }

        $users = $queryBuilder->paginate($request->get('per_page'));

        return new UserCollection($users);
    }

    /**
     * Store
     *
     * @param StoreRequest $request
     * @return \Illuminate\Http\JsonResponse
     * @responseFile 201 storage/responses/users.store.json
     */
    public function store(StoreRequest $request)
    {
        $data = $request->only([
            'name',
            'email',
            'password',
            'role_id',
        ]);
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        return $this->responseSuccess([
            'message' => 'Cadastro realizado com sucesso!',
            'data' => new UserResource($user),
        ], Response::HTTP_CREATED);
    }
}
