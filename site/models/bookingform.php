<?php
class BookingformPage extends Page {


    public function acceptsBookings() {

        if( $this->parent()->acceptsBookings() ) {
            return true;
        }
    }

    public function openTours() {

        return $this->parent()->parent()->openTours();
    }

    public function tourTitle() {

        return $this->parent()->parent()->title();
    }
    
    public function bookingType() {

        return $this->parent()->availableBookingType();
    }

    public function tourType() {
        
        return $this->parent()->parent()->programType();
    }
}
