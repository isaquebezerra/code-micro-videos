<?php

namespace App\Http\Controllers\Api;

use App\Models\CastMember;

class CastMemberController extends BasicCrudController
{
    private $rules;

    public function __construct()
    {
        $castMemberTypes = [CastMember::TYPE_DIRECTOR, CastMember::TYPE_ACTOR];
        $this->rules = [
            'name' => 'required|max:255',
            'type' => 'required|in:' . implode(',', $castMemberTypes),
        ];
    }

    protected function model()
    {
        return CastMember::class;
    }

    protected function rulesStore()
    {
        return $this->rules;
    }

    protected function rulesUpdate()
    {
        return $this->rules;
    }
}
