<?php

use Uniform\Form;

return function ($kirby, $pages, $page) {

    if ($page->intendedTemplate() != 'contact' && $page->intendedTemplate() != 'bookingform' && $page->intendedTemplate() != 'info') {
 
        $newsletterform = new Form([
            'newsletter_email' => [
                'rules' => ['required', 'email'],
                'message' => 'Παρακαλώ συμπληρώστε το email σας.',
            ],
            'formtitle' => [],
        ], 'newsletter-form');
        
        if ($kirby->request()->is('POST') && get('formtitle') == 'newsletterform') {
        
            $newsletterform->honeypotGuard()
            ->mailSubscriptionAction()
            ;
        }

        return compact('newsletterform');
    }
};
