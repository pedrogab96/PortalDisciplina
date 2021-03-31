<?php

namespace App\Http\Controllers;

use App\Http\Requests\Professor\CreateRequest;
use App\Http\Requests\Professor\StoreRequest;
use App\Models\Professor;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Self_;

class ProfessorUserController extends Controller
{
    const VIEW_PATH = "admin.";
    const DEFAULT_PIC_URL = "default_todo";

    public function index()
    {
        $professors = Professor::query()->with([
            'user',
        ])->get();
        return view(self::VIEW_PATH.'index', compact('professors'));
    }

    public function create(CreateRequest $request)
    {
        return view(self::VIEW_PATH.'create');
    }
    public function store(StoreRequest $request)
    {
        DB::beginTransaction();
        try
        {
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
                'role_id' => '3'
            ]);

            $public_email = $request->input('public_email');
            if($public_email == null){
                $public_email = $user->email;
            }

            Professor::create([
                'name' => $user->name,
                'profile_pic_link' => self::DEFAULT_PIC_URL,
                'public_email' => $public_email,
                'user_id' => $user->id
            ]);

            DB::commit();
            return redirect()->route('professores.index');

        }catch(\Exception $exception)
        {
            DB::rollback();
            return redirect()->back()->withInput();
        }
    }

    public function destroy($id){
        $professor = Professor::findOrFail($id);
        $professor->user->delete();
        return redirect()->route('professores.index');
    }
}
