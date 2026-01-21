<?php 
    class Task {
        private $title;
        private $description;
        private $status;

        public function __construct($title, $description) {
            $this->title = $title;
            $this->description = $description;
            $this->status = false;
        }

        public function getTitle(){
            return $this->title;
        }
        public function getDescription(){
            return $this->description;
        }

        public function isDone(): bool {
            return $this->status;
        }
    }
?>