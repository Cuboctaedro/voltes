<?php
class PostPage extends Page {

    public function longDate() {

        $rawdate = $this->date()->toDate('U');

        if($this->kirby()->language()->code() == 'el' ) {

            return t(date('l', $rawdate)) . ', ' . date('j', $rawdate) . ' ' . t(date('F', $rawdate)) . ', ' . date('Y', $rawdate);

        } else {

            return date('l', $rawdate) . ', ' . date('F', $rawdate) . ' ' . date('jS', $rawdate) . ', ' . date('Y', $rawdate);

        }

    }

    public function midDate() {

        $rawdate = $this->date()->toDate('U');

        if($this->kirby()->language()->code() == 'el' ) {

            return t(date('D', $rawdate)) . ', ' . date('j', $rawdate) . ' ' . t(date('M', $rawdate)) . ', ' . $this->time();

        } else {

            return date('D', $rawdate) . ', ' . date('M', $rawdate) . ' ' . date('jS', $rawdate) . ', ' . $this->time();

        }

    }

    public function shortDate() {

        $rawdate = $this->date()->toDate('U');

        if($this->kirby()->language()->code() == 'el' ) {

            return  date('d.m.y g:i', $rawdate);

        } else {

            return  date('m.d.y g:i', $rawdate);

        }

    }


}
