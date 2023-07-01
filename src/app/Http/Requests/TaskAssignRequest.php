<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\WorkplaceAndImplementationDateChecker;
use App\Rules\EmployeeAndImplementationDateChecker;

class TaskAssignRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'workplace_id' => ['required', 'integer', 'exists:workplaces,id'],
            'employee_ids' => ['array'],
            'employee_ids.*' => ['required', 'integer', 'exists:employees,id'],
            'implementation_date' => ['required', 'string', 'date_format:Y-m-d', 'after_or_equal:today',
                new WorkplaceAndImplementationDateChecker($this->id, $this->workplace_id, $this->implementation_date),
                new EmployeeAndImplementationDateChecker($this->id, $this->employee_ids, $this->implementation_date)
            ],
        ];
    }

    /**
     * 項目名
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'workplace_id' => '作業場所',
            'employee_ids' => '担当者',
            'employee_ids.*' => '担当者',
        ];
    }
}
