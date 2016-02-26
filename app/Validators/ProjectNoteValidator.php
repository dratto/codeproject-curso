<?php
/**
 * Created by PhpStorm.
 * User: diogo
 * Date: 15/08/15
 * Time: 21:58
 */

namespace CodeProject\Validators;


use Prettus\Validator\LaravelValidator;

class ProjectNoteValidator extends LaravelValidator
{
    protected $rules = [
        'project_id' => 'required|integer',
        'title' => 'required',
        'note' => 'required'
    ];
}