<?php

namespace App\Http\Controllers\V1;

use App\Http\Requests\V1\User\IndexRequest;
use App\Http\Resources\V1\UserCollection;
use App\Models\User;

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
}
