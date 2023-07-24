<?php

require_once('./utilis/loadClass.php');


    class   Doggy extends Mammals {
        
        private $breed;
        private $color;

        public function __construct($breed, $color) {
                    $this->breed = $breed;
                    $this->color = $color;
                }

        public function bark() {
            echo "Barking";
        }
        
        public function setBreed($breed) {
            $this->breed = $breed;
        }

        public function getBreed() {
                    return $this->breed;
                }

        /**
         * Get the value of color
         */ 
        public function getColor()
        {
                return $this->color;
        }

        /**
         * Set the value of color
         *
         * @return  self
         */ 
        public function setColor($color)
        {
                $this->color = $color;

                return $this;
        }
    }
