<?php
    class hour{
        public $teacher;
        public $group;
        public $room;
        public $subject;
        public function __construct($teacher,$group,$room,$subject){
            $this->teacher = $teacher;
            $this->group = $group;
            $this->room = $room;
            $this->subject = $subject;
        }
    }
?>