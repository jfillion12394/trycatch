<?php

class Car
{
    private bool $hasParkBrake = true;
    private string $errorMessage = "Car can't start while parking brake engaged!!!!";

        public function setParkBrake($hasParkBrake):void {
            $this->hasParkBrake = $hasParkBrake ;
        }

        public function getParkBrake():bool {
            return $this->hasParkBrake;
        }

        public function start():string {
            if ($this->hasParkBrake === true) {
                throw new Exception($this->errorMessage);
            }
            else
            {
                return "On démarre, c'est parti ! ";
            }
    }
    







}