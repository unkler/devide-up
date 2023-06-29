<?php
namespace App\TaskAssign\UseCase;

use Carbon\Carbon;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use App\Models\TaskAssign;

final class ShowTaskAssignUseCase {

    /**
     *  作業一覧を表示する
     *
     * @param string $is_after_today
     * @return LengthAwarePaginator
     */
    public function handle(string $is_after_today): LengthAwarePaginator
    {
        $condition = $is_after_today === 'true' ? '>=' : '<';

        $logged_in_user = Auth::user();

        $task_assigns = TaskAssign::select('id', 'workplace_id', 'implementation_date')->with('workPlaces', 'employees', 'workplaces.clients:id,name')
            ->where('implementation_date', $condition,  Carbon::today()->format('Y-m-d'))
            ->whereHas('workPlaces.clients.users', function ($query) use ($logged_in_user) {
                $query->where('id', $logged_in_user->id);
            })
            ->groupBy(['workplace_id', 'implementation_date'])
            ->paginate(\PaginationConstant::NUMBER_PER_PAGE);

        return $task_assigns;
    }
}

