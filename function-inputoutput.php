<?php

    class Kalkulator{
        private $x;
        protected $y;
        
        public function setPertambahan($x, $y){
            $this->x = $x;
            $this->y = $y;
            $result = $this->x + $this->y;
            return $result;
        }

        public function setPengurangan($x, $y){
            $this->x = $x;
            $this->y = $y;
            $result = $this->x - $this->y;
            return $result;
        }
        
        public function setPerkalian($x, $y){
            $this->x = $x;
            $this->y = $y;
            $result = $this->x * $this->y;
            return $result;
        }

        public function setPembagian($x, $y){
            $this->x = $x;
            $this->y = $y;
            if ($this->y != 0) {
                $result = $this->x / $this->y;
                return $result;
            } else {
                return"Error: Cannot divide by zero! ";
            }
        }
    }

?>