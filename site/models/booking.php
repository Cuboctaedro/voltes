<?php
class BookingPage extends Page {


    public function isPaid() {

        if($this->payment()->exists() && $this->payment()->toBool() === true ) {
            return true;
        }

    }

    public function isCancelled() {

        if($this->cancel()->exists() && $this->cancel()->toBool() === true ) {
            return true;
        }

    }

    public function paymentStatus() {

        if ($this->isPaid()) {
            return "Πληρωμένη";
        } elseif($this->isCancelled()) {
            return "Ακυρωμένη";
        } else {
            return "Απλήρωτη";
        }

    }

    public function bookingStatusDisplay() {

        if ($this->bookingstatus() == 'booked') {
            return "Ολοκλήρωση";
        } else {
            return "Λίστα αναμονής";
        }

    }

}
