<?php
if( ! $kirby->user() or ! $kirby->user()->isAdmin() ) {
    go($page->parent()->url());
} else {
    
    // output headers so that the file is downloaded rather than displayed
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
if ( $page->parent()->programType() == 'children' ) {
    fputcsv($output, array('Όνομα', 'Επίθετο', 'Διεύθυνση', 'Πόλη', 'Τηλ', 'email', 'Αρ. Παιδιών', 'Αρ. Ενηλίκων', 'Ονόματα Παιδιών', 'Μήνυμα', 'Ολοκλήρωση πληρωμής', 'Ωρα κράτησης','Σημειώσεις'));

} else {
    fputcsv($output, array('Όνομα', 'Επίθετο', 'Διεύθυνση', 'Πόλη', 'Τηλ', 'email', 'Αρ. Εφήβων', 'Αρ. Ενηλίκων', 'Μήνυμα', 'Ολοκλήρωση πληρωμής', 'Ωρα κράτησης','Σημειώσεις'));
}

// loop over the rows, outputting them
foreach($page->childrenAndDrafts()->filterBy('intendedTemplate', 'booking') as $booking ) {
    if($booking->payment()->toBool() == true) {
        $payment = 'NAI';
    } else {
        $payment = 'OXI';
    }
    if ( $page->parent()->programType() == 'children' ) {
        $row = array(
            trim(preg_replace('/\s+/', ' ', str::replace($booking->first_name()->value(), ',', ';'))), 
            trim(preg_replace('/\s+/', ' ', str::replace($booking->last_name()->value(), ',', ';'))),
            trim(preg_replace('/\s+/', ' ', str::replace($booking->address()->value(), ',', ';'))),
            trim(preg_replace('/\s+/', ' ', str::replace($booking->city()->value(), ',', ';'))),
            trim(preg_replace('/\s+/', ' ', str::replace($booking->phone()->value(), ',', ';'))),
            trim(preg_replace('/\s+/', ' ', str::replace($booking->email()->value(), ',', ';'))),
            str::replace($booking->children_number()->value(), ',', ';'),
            str::replace($booking->adult_number()->value(), ',', ';'),
            str::replace($booking->children_names()->value(), ',', ';'),
            trim(preg_replace('/\s+/', ' ', str::replace($booking->client_message()->value(), ',', ';'))),
            $payment,
            str::replace($booking->booking_time()->value(), ',', ';'),
            trim(preg_replace('/\s+/', ' ', str::replace($booking->notes()->value(), ',', ';')))
        );
    } else {
        $row = array(
            trim(preg_replace('/\s+/', ' ', str::replace($booking->first_name()->value(), ',', ';'))), 
            trim(preg_replace('/\s+/', ' ', str::replace($booking->last_name()->value(), ',', ';'))),
            trim(preg_replace('/\s+/', ' ', str::replace($booking->address()->value(), ',', ';'))),
            trim(preg_replace('/\s+/', ' ', str::replace($booking->city()->value(), ',', ';'))),
            trim(preg_replace('/\s+/', ' ', str::replace($booking->phone()->value(), ',', ';'))),
            trim(preg_replace('/\s+/', ' ', str::replace($booking->email()->value(), ',', ';'))),
            str::replace($booking->teen_number()->value(), ',', ';'),
            str::replace($booking->adult_number()->value(), ',', ';'),
            trim(preg_replace('/\s+/', ' ', str::replace($booking->client_message()->value(), ',', ';'))),
            $payment,
            str::replace($booking->booking_time()->value(), ',', ';'),
            trim(preg_replace('/\s+/', ' ', str::replace($booking->notes()->value(), ',', ';')))
        );
        
    }

    fputcsv($output, $row);
}

}


