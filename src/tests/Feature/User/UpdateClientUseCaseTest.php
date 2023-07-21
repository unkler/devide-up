<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;
use App\Models\User;
use App\User\UseCase\UpdateUserUseCase;
use App\User\Entity\UserData;

class UpdateUserUseCaseTest extends TestCase
{
    use DatabaseMigrations;
    
    public function setUp(): void
    {
        parent::setUp();
        
        Artisan::call('migrate:fresh --seed');
    }

    /**
     * ユーザー更新のテスト
     *
     * @return void
     */
    public function test_ユーザーを更新する(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $user_data = new UserData($user->id, 'アップデート済みユーザー', 'sample@sample.com');

        $use_case = new UpdateUserUseCase();

        $use_case->handle($user_data);

        $this->assertDatabaseHas('users', [
            'id' => $user_data->getId(),
            'name' => $user_data->getName(),
            'email' => $user_data->getEmail(),
        ]);
    }
}
