<?php
namespace App\User\UseCase;

use Illuminate\Http\Response;
use App\Models\User;
use App\User\Entity\UserData;

final class UpdateUserUseCase {

    /**
     * ユーザーを更新する
     *
     * @param UserData $user_data
     * @return integer
     */
    public function handle(UserData $user_data): int
    {
        $response_code = Response::HTTP_CREATED;

        $user = User::find($user_data->getId());

        $user->name = $user_data->getName();
        $user->email = $user_data->getEmail();

        try {
            $user->save();
        }catch(\Exception $e) {
            $response_code = Response::HTTP_INTERNAL_SERVER_ERROR;
            \Log::error('User modification failed. ID = ' . $user->id);
            \Log::error($e->getMessage());
        }

        return $response_code;
    }
}

