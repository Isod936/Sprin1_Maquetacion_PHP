<?php

class SpeedSensor
{
    public function checkSpeed(int $speed): string
    {
        if ($speed < 30) {
            return "Muy lento";
        } elseif ($speed >= 30 && $speed <= 60) {
            return "Velocidad adecuada";
        } elseif ($speed >= 61 && $speed <= 80) {
            return "Exceso leve";
        } elseif ($speed >= 81 && $speed <= 100) {
            return "Exceso moderado";
        } else {
            return "Exceso grave";
        }
    }
}