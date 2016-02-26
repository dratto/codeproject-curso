<?php
/**
 * Created by PhpStorm.
 * User: diogo
 * Date: 15/08/15
 * Time: 21:58
 */

namespace CodeProject\Validators;


use Prettus\Validator\LaravelValidator;

class ProjectValidator extends LaravelValidator
{
    protected $rules = [
        'owner_id' => 'required|integer',
        'client_id' => 'required|integer',
        'name' => 'required',
        'status' => 'required',
        'progress' => 'required',
        'due_date' => 'required|date'
    ];
}