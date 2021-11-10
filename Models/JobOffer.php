<?php 

namespace Models;

class JobOffer {
    private $idEmpresa;
    private $idJobPosition;
    private $idJobOffer;
    private $offerDescription;
    private $applicants;

    public function __construct(){
    }

    public function getIdEmpresa(){ return $this->idEmpresa; }
    public function setIdEmpresa($idEmpresa): self { $this->idEmpresa = $idEmpresa; return $this; }

    public function getIdJobPosition(){ return $this->idJobPosition; }
    public function setIdJobPosition($idJobPosition): self { $this->idJobPosition = $idJobPosition; return $this; }

    public function getIdJobOffer(){ return $this->idJobOffer; }
    public function setIdJobOffer($idJobOffer): self { $this->idJobOffer = $idJobOffer; return $this; }

    public function getOfferDescription(){ return $this->offerDescription; }
    public function setOfferDescription($offerDescription): self { $this->offerDescription = $offerDescription; return $this; }

    public function getApplicants(){ return $this->applicants; }
    public function setApplicants($applicants): self { $this->applicants = $applicants; return $this; }
}
?>