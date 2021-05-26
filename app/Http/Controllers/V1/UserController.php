<?php

namespace App\Http\Controllers\V1;

use App\Http\Requests\V1\User\DestroyRequest;
use App\Http\Requests\V1\User\IndexRequest;
use App\Http\Requests\V1\User\ShowRequest;
use App\Http\Requests\V1\User\StoreRequest;
use App\Http\Requests\V1\User\UpdateRequest;
use App\Http\Resources\V1\UserCollection;
use App\Http\Resources\V1\UserResource;
use App\Models\User;
use Illuminate\Http\Response;

/**
 * Class UserController
 * @package App\Http\Controllers\V1
 *
 * @group V1 User
 */
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
     * @unauthenticated
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

    /**
     * Show
     *
     * @param ShowRequest $request
     * @param $id
     * @return UserResource
     * @responseFile storage/responses/users.show.json
     */
    public function show(ShowRequest $request, $id)
    {
        $user = User::findOrFail($id);

        return new UserResource($user);
    }

    /**
     * Update
     *
     * @param UpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     * @responseFile storage/responses/users.update.json
     */
    public function update(UpdateRequest $request, $id)
    {
        $user = $request->user();
        $data = $request->only([
            'name',
            'email',
        ]);

        $user->update($data);

        return $this->responseSuccess([
            'message' => 'Seus dados foram atualizados com sucesso!',
            'data' => new UserResource($user),
        ], Response::HTTP_CREATED);
    }

    /**
     * Destroy
     *
     * @param DestroyRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     * @responseFile storage/responses/users.destroy.json
     */
    public function destroy(DestroyRequest $request, $id)
    {
        $user = $request->user();
        $user->forceDelete();

        return $this->responseSuccess([
            'message' => 'Sua conta foi apagada com sucesso!',
        ]);
    }
}
