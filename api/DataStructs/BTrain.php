<?php

/**
 * Description of BTrain
 *
 * @author pieterc
 */

include("Vehicle.php");
class BTrain extends Vehicle {
    private $internalId;
    private $x;
    private $y;
    private $traject;

    function __construct($internalId, $x = 0, $y = 0) {
        $this->internalId = $internalId;
        $this->x = $x;
        $this->y = $y;
    }

    function getId(){
        return "Be."."NMBS.".$this ->internalId;
    }
    
    function hasCoordinates(){
        return $this->x != 0 && $this->y != 0;
    }
    
    function getCoordinates(){
        return $this->y . " " . $this->x;
    }

    function hasTraject(){
        return $this->traject != null;
    }

    function getTraject(){
        return $this->traject;
    }
    
}
?>
