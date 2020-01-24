<header class="p-3 md:p-6 border-b border-gray-200 border-solid">
    <h1 class="heading-1"><?= $page->parent()->parent()->title() ?></h1>
    <h3 class="">
        <?= $page->parent()->longDate(); ?>
    </h3>
</header>

<?php if ( $page->parent()->parent()->openTours()->count() > 1 ) : ?>
    <div class="p-3 md:p-6 border-b border-gray-200 border-solid">

        <div class="w-full text-sm font-titles leading-none uppercase tracking-widest text-gray-600">Άλλες ημερομηνίες</div>
        
        <?php foreach ( $page->parent()->parent()->openTours() as $tourdate ) : ?>
        
            <?php if ( $tourdate != $page->parent() ) : ?>
                <a class="block" href="<?= url($tourdate->url() . '/bookingform') ?>"><?= $tourdate->longDate(); ?></a>
            <?php endif; ?>
        
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<form action="<?= $page->url() ?>" method="POST" class="p-3 md:p-6" id="bookingform">

    <div class="mb-12">
        <?php snippet('forms/fields/input', [
            'field_name' => 'first_name',
            'form_name' => $bookingform,
            'field_label' => 'Όνομα',
        ]);?>
    </div>

    <div class="mb-12">
        <?php snippet('forms/fields/input', [
            'field_name' => 'last_name',
            'form_name' => $bookingform,
            'field_label' => 'Επίθετο',
        ]);?>
    </div>

    <div class="mb-12">
        <?php snippet('forms/fields/input', [
            'field_name' => 'phone',
            'form_name' => $bookingform,
            'field_label' => 'Τηλέφωνο',
            'field_info' => 'Δηλώστε έναν αριθμό κινητού που μπορούμε να σας ειδοποιήσουμε σε περίπτωση αλλαγής του προγράμματος.'
        ]);?>
    </div>

    <div class="mb-12">
        <?php snippet('forms/fields/input', [
            'field_name' => 'email',
            'field_type' => 'email',
            'form_name' => $bookingform,
            'field_label' => 'Email',
            'field_info' => 'Γράψτε ένα έγκυρο email που το ελέγχετε τακτικά.'
        ]);?>
    </div>

    <?php if($page->tourType() == 'children'): ?>

        <div class="mb-12">
            <h2 class="heading-3">Δηλώστε πόσα άτομα θα συμμετέχουν</h2>
            <div class="">Επιλέξτε πόσα παιδιά και πόσοι ενήλικες θα συμμετάσχουν στην ξενάγηση. Σε κάθε κράτηση επιτρέπονται έως 4 παιδιά και 4 ενήλικες. Αν θέλετε να δηλώσετε συμμετοχή για περισσότερα άτομα θα συμπληρώσετε και δεύτερη φόρμα κράτησης με το ίδιο ονοματεπώνυμο.</div>
        </div>

        <div class="flex flex-row flex-wrap mb-12">
 
            <?php snippet('forms/fields/select', [
                'field_name' => 'children_number',
                'form_name' => $bookingform,
                'field_label' => 'Αριθμός παιδιών',
                'options' => [
                    [
                        'label' => '0',
                        'val' => 0
                    ],
                    [
                        'label' => '1',
                        'val' => 1
                    ],
                    [
                        'label' => '2',
                        'val' => 2
                    ],
                    [
                        'label' => '3',
                        'val' => 3
                    ],
                    [
                        'label' => '4',
                        'val' => 4
                    ],
                ]
            ]);?>

            <?php snippet('forms/fields/select', [
                'field_name' => 'adult_number',
                'form_name' => $bookingform,
                'field_label' => 'Αριθμός ενηλίκων',
                'options' => [
                    [
                        'label' => '0',
                        'val' => 0
                    ],
                    [
                        'label' => '1',
                        'val' => 1
                    ],
                    [
                        'label' => '2',
                        'val' => 2
                    ],
                    [
                        'label' => '3',
                        'val' => 3
                    ],
                    [
                        'label' => '4',
                        'val' => 4
                    ],
                ]
            ]);?>
        
        </div>

        <div class="mb-12">
            <?php snippet('forms/fields/textarea', [
                'field_name' => 'children_names',
                'form_name' => $bookingform,
                'field_label' => 'Ονόματα και ηλικίες παιδιών',
                'field_options' => ' rows="5" ',
                'field_info' => 'Συμπληρώστε μόνο το μικρό όνομα και την ηλικία του κάθε παιδιού χωρισμένα με κόμμα. π.χ. (Μαρία 6, Απόστολος 7, Τζωρτζίνα 8). ΠΡΟΣΟΧΗ: Θα γίνονται δεκτά μόνον παιδιά που είναι μέσα στα ηλικιακά όρια που προβλέπει η ξενάγηση. Αν έχετε μικρότερα ή μεγαλύτερα παιδιά παρακαλώ επικοινωνήστε μαζί μας.'
                ]);?>
        </div>

    <?php else: ?>

        <div class="flex flex-row flex-wrap mb-12">
            
            <?php snippet('forms/fields/select', [
                'field_name' => 'adult_number',
                'form_name' => $bookingform,
                'field_label' => 'Αριθμός ενηλίκων',
                'field_info' => 'Επιλέξτε πόσοι ενήλικες θα συμμετέχουν.Το κόστος ξενάγησης για κάθε ενήλικα είναι €10.',
                'options' => [
                    [
                        'label' => '0',
                        'val' => 0
                    ],
                    [
                        'label' => '1',
                        'val' => 1
                    ],
                    [
                        'label' => '2',
                        'val' => 2
                    ],
                    [
                        'label' => '3',
                        'val' => 3
                    ],
                    [
                        'label' => '4',
                        'val' => 4
                    ],
                ]
            ]);?>

           <?php snippet('forms/fields/select', [
                'field_name' => 'teen_number',
                'form_name' => $bookingform,
                'field_label' => 'Αριθμός εφήβων',
                'field_info' => 'Επιλέξτε πόσοι έφηβοι θα συμμετέχουν. Κάθε ενήλικας μπορεί να συνοδεύει έως έναν έφηβο ΔΩΡΕΑΝ.',
                'options' => [
                    [
                        'label' => '0',
                        'val' => 0
                    ],
                    [
                        'label' => '1',
                        'val' => 1
                    ],
                    [
                        'label' => '2',
                        'val' => 2
                    ],
                    [
                        'label' => '3',
                        'val' => 3
                    ],
                    [
                        'label' => '4',
                        'val' => 4
                    ],
                ]
            ]);?>

            </div>

    <?php endif; ?>
 
    <div class="mb-12">
        <?php snippet('forms/fields/radio', [
            'field_name' => 'payment_method',
            'form_name' => $bookingform,
            'field_label' => 'Επιλέξτε τον τρόπο που επιθυμείτε να εξοφλήσετε',
            'field_info' => 'Περισσότερες πληροφορίες θα βρείτε στο email επιβεβαίωσης που θα λάβετε.',
            'options' => [
                [
                    'label' => 'Κατάθεση στην τράπεζα Πειραιώς',
                    'val' => 'piraeus'
                ],
                [
                    'label' => 'Paypal',
                    'val' => 'paypal'
                ],
                [
                    'label' => 'Έμβασμα από άλλη τράπεζα',
                    'val' => 'otherbank'
                ],
            ]
        ]);?>
    </div>

    <div class="mb-12">
        <?php snippet('forms/fields/textarea', [
            'field_name' => 'client_message',
            'form_name' => $bookingform,
            'field_label' => 'Παρατηρήσεις / σχόλια',
            'field_options' => ' rows="5" '
        ]);?>
    </div>

    <div class="mb-12">
        <h2 class="heading-3">Έκδοση απόδειξης στα στοιχεία:</h2>
    </div>


    <div class="mb-12">
        <?php snippet('forms/fields/input', [
            'field_name' => 'address',
            'form_name' => $bookingform,
            'field_label' => 'Διεύθυνση (Οδός - Αρ.)',
            'field_info' => 'Παρακαλούμε συμπληρώστε την διεύθυνσή σας για να μπορέσουμε να σας εκδώσουμε την απόδειξή σας. Η απόδειξη είσπραξης θα σας σταλεί ηλεκτρονικά μετά την κατάθεση των χρημάτων.',
        ]);?>
    </div>

    <div class="mb-12">
        <?php snippet('forms/fields/input', [
            'field_name' => 'city',
            'form_name' => $bookingform,
            'field_label' => 'Πόλη',
        ]);?>
    </div>

    <div class="mb-12">
        <?php
        if($page->tourType() == 'children') {
            $termpage = $pages->find('pws-doyleyoyme');
        } else {
            $termpage = $pages->find('plhrofories-gia-enhlikes');
        }
        // $termpage = $pages->find('how-we-work');
        $temrinfo = '<a href="' . $termpage->url() . '" target="_blank" >Διαβάστε τους όρους συμμετοχής.</a>'

        ?>
        <?php snippet('forms/fields/checkbox', [
            'field_name' => 'terms',
            'form_name' => $bookingform,
            'field_label' => 'Κόστος ξενάγησης & Αναλυτικοί όροι συμμετοχής',
            'field_info' => $temrinfo,
            'options' => [
                [
                    'label' => 'Έχω διαβάσει τους όρους συμμετοχής και συμφωνώ',
                    'val' => 'terms'
                ],
            ]
        ]);?>
    </div>

    <div class="mb-12">
        <?php
        $gdprpage = $pages->find('politikh-aporrhtoy');
        $gdprinfo = '<a href="' . $gdprpage->url() . '" target="_blank" >Διαβάστε την εδώ.</a>'

        ?>
        <?php snippet('forms/fields/checkbox', [
            'field_name' => 'gdpr',
            'form_name' => $bookingform,
            'field_label' => 'Πολιτική Προστασίας Δεδομένων Προσωπικού Χαρακτήρα',
            'field_info' => $gdprinfo,
            'options' => [
                [
                    'label' => 'Έχω διαβάσει την πολιτική προστασίας προσωπικών δεδομένων και συμφωνώ',
                    'val' => 'gdpr'
                ],
            ]
        ]);?>
    </div>

    <?= csrf_field(); ?>
    <?= honeypot_field(); ?>
    <input type="hidden" name="formtitle" value="bookingform">
    <input type="hidden" name="tourtitle" value="<?= $page->parent()->parent()->slug() ?>">
    <input type="hidden" name="tourdate" value="<?= $page->parent()->slug() ?>">

    <div class="mb-12">
        <input
            type="submit"
            value="Υποβολή"
            class=" font-titles text-sm uppercase tracking-wider px-6 py-2 bg-brand-500 text-white hover:bg-brand-600 shadow-lg hover:shadow-xl cursor-pointer rounded"
        >
    </div>
</form>
            <!-- class="g-recaptcha font-titles text-sm uppercase tracking-wider px-6 py-2 bg-brand-500 text-white hover:bg-brand-600 shadow-lg hover:shadow-xl cursor-pointer rounded"
            data-sitekey="<?= option('voltes.recaptcha'); ?>" 
            data-callback='onSubmit'             -->
