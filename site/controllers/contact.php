<?php

use Uniform\Form;

return function ($kirby, $pages, $page) {

    $contactform = new Form([
        'name' => [
            'rules' => ['required'],
            'message' => 'Παρακαλώ συμπληρώστε το όνομα σας.',
        ],
        'lastname' => [
            'rules' => ['required'],
            'message' => 'Παρακαλώ συμπληρώστε το επίθετο σας.',
        ],
        'email' => [
            'rules' => ['required', 'email'],
            'message' => 'Παρακαλώ συμπληρώστε το email σας.',
        ],
        'formtitle' => [],
        'message' => []
    ], 'contact-form');

    if ($kirby->request()->is('POST') && get('formtitle') == 'contactform') {

        $contactform->honeypotGuard()
        ->mailContactAction()
        ;

    }

    return compact('contactform');
};
