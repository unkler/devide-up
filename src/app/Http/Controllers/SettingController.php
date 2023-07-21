<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\User\UseCase\UpdateUserUseCase;
use App\User\Entity\UserData;

class SettingController extends Controller
{
    /**
     * ユーザー取得アクション
     *
     * @return User
     */
    public function fetchUser(): User
    {   
        return Auth::user();
    }

    /**
     * ユーザー更新アクション
     *
     * @param UserRequest $request
     * @param UpdateUserUseCase $use_case
     * @return integer
     */
    public function update(UserRequest $request, UpdateUserUseCase $use_case)
    {
        $user_data = new UserData(Auth::id(), $request->name, $request->email);

        return $use_case->handle($user_data);
    }
}
