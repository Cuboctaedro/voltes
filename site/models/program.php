<?php
class ProgramPage extends Page {

    public function openTours() {

        return $this->children()->filterBy('acceptsBookings', true)->sortBy('date');

    }

    public function futureTours() {

        return $this->children()->filterby('isFuture', true)->sortBy('date');

    }

    public function hasOpenTours() {

        return ! $this->openTours()->isEmpty();
    }

    public function hasFutureTours() {

        return ! $this->futureTours()->isEmpty();
    }
        
    public function programType() {

        if ( $this->tourtype()->exists() && $this->tourtype()->isNotEmpty() ) {
            return $this->tourtype();
        } else {
            return 'children';
        }
    }

    public function tourAgesDisplay() {

        if ($this->programType() == 'children') {
            return $this->ages();
        } else {
            return '18+';
        }
    }

}
