<?php
class LocationPage extends Page {

    public function hiddenPrograms() {

        return $this->programs()->toStructure()->filterBy('hide', '==', 'true');

    }

    public function programList() {

        return $this->programs()->toStructure()->filter(function($program) {
            return !$this->hiddenPrograms()->has($program);
        });

    }

}
