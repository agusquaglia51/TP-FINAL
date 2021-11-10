<?php 

namespace Models;

class JobPositions {
    private $jobPositionId;
    private $description;
    private $careerId;

    function __construct(){
        $this->careerId = array();
    }

    public function getJobPositionId(){ return $this->jobPositionId; }
    public function setJobPositionId($jobPositionId): self { $this->jobPositionId = $jobPositionId; return $this; }

    public function getDescriptionJ(){ return $this->description; }
    public function setDescriptionJ($description): self { $this->description = $description; return $this; }

    public function getCareerId(){ return $this->careerId; }
    public function setCareerId($careerId): self { $this->careerId = $careerId; return $this; }

    public function AddCarrerId($id){
        array_push($this->careerId,$id);
    }
}
?>