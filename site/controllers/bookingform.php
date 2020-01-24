<?php

use Uniform\Form;

return function ($kirby, $pages, $page, $site) {
    
    if ( $page->tourType() == 'children') {
        $bookingform = new Form([
            'first_name' => [
                'rules' => ['required'],
                'message' => 'Παρακαλώ συμπληρώστε το όνομα σας.',
            ],
            'last_name' => [
                'rules' => ['required'],
                'message' => 'Παρακαλώ συμπληρώστε το επίθετο σας.',
            ],
            'address' => [
                'rules' => ['required'],
                'message' => 'Παρακαλώ συμπληρώστε τη διεύθυνση σας.',
            ],
            'city' => [
                'rules' => ['required'],
                'message' => 'Παρακαλώ συμπληρώστε την πόλη σας.',
            ],
            'phone' => [
                'rules' => ['required'],
                'message' => 'Παρακαλώ συμπληρώστε το τηλέφωνο σας.',
            ],
            'email' => [
                'rules' => ['required', 'email'],
                'message' => 'Παρακαλώ συμπληρώστε το email σας.',
            ],
            'children_number' => [
                'rules' => ['required'],
                'message' => 'Παρακαλώ συμπληρώστε τον αριθμό των παιδιών.',
            ],
            'adult_number' => [
                'rules' => ['required'],
                'message' => 'Παρακαλώ συμπληρώστε τον αριθμό των ενηλίκων.',
            ],
            'children_names' => [
                'rules' => ['required'],
                'message' => 'Παρακαλώ συμπληρώστε τα ονόματα και τις ηλικίες των παιδιών.',
            ],
            'payment_method' => [
                'rules' => ['required'],
                'message' => 'Παρακαλώ επιλέξτε τρόπο πληρωμής.',
            ],            
            'terms' => [
                'rules' => ['required'],
                'message' => 'Πρέπει να συμφωνήσετε με τους όρους συμματοχής.',
            ],
            'gdpr' => [
                'rules' => ['required'],
                'message' => 'Πρέπει να συμφωνήσετε με την πολιτική προστασίας προσωπικών δεδομένων.',
            ],
            'tourtitle' => [],
            'formtitle' => [],
            'tourdate' => [],
            'client_message' => []
        ], 'booking-form');
    
    } else {
        $bookingform = new Form([
            'first_name' => [
                'rules' => ['required'],
                'message' => 'Παρακαλώ συμπληρώστε το όνομα σας.',
            ],
            'last_name' => [
                'rules' => ['required'],
                'message' => 'Παρακαλώ συμπληρώστε το επίθετο σας.',
            ],
            'address' => [
                'rules' => ['required'],
                'message' => 'Παρακαλώ συμπληρώστε τη διεύθυνση σας.',
            ],
            'city' => [
                'rules' => ['required'],
                'message' => 'Παρακαλώ συμπληρώστε την πόλη σας.',
            ],
            'phone' => [
                'rules' => ['required'],
                'message' => 'Παρακαλώ συμπληρώστε το τηλέφωνο σας.',
            ],
            'email' => [
                'rules' => ['required', 'email'],
                'message' => 'Παρακαλώ συμπληρώστε το email σας.',
            ],
            'adult_number' => [
                'rules' => ['required'],
                'message' => 'Παρακαλώ συμπληρώστε τον αριθμό των ενηλίκων.',
            ],
            'teen_number' => [],
            'payment_method' => [
                'rules' => ['required'],
                'message' => 'Παρακαλώ επιλέξτε τρόπο πληρωμής.',
            ],            
            'terms' => [
                'rules' => ['required'],
                'message' => 'Πρέπει να συμφωνήσετε με τους όρους συμματοχής.',
            ],
            'gdpr' => [
                'rules' => ['required'],
                'message' => 'Πρέπει να συμφωνήσετε με την πολιτική προστασίας προσωπικών δεδομένων.',
            ],
            'tourtitle' => [],
            'formtitle' => [],
            'tourdate' => [],
            'client_message' => []
        ], 'booking-form');
    
    }
    
    if ($kirby->request()->is('POST') && get('formtitle') == 'bookingform') {
        
        if ( ! $page->parent()->isOpen() ) {

            $bookingstatus = 'error';

        } else {
 
            if ( $page->bookingType() == 'waiting' ) {
                $bookingstatus = 'waiting';
                
            } else {
                $bookingstatus = 'booked';
            }
            
            $bookingform->data('bookingstatus', $bookingstatus);

            $bookingform->honeypotGuard()
            ->saveBookingAction()
            ->mailBookingAction()
            ->mailToTinaAction()
            ;
        }
    }

    return compact('bookingform', 'bookingstatus');
};
