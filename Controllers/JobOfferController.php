<?php 

namespace Controllers;
use Exception;
use Models\JobOffer as JobOffer;
use Alert;
use DAO\JobOfferDAO;

class JobOfferController{
    private $JobControllerDAO;

    public function __construct(){
        $this->JobControllerDAO = new JobOfferDAO();
    }

    public function ShowAddView(){
        require_once(VIEWS_PATH."jobOffer-add.php");
    }

    public function ShowListView(){
        $JobPositionList = $this->JobPositionDAO->GetAll();

        require_once(VIEWS_PATH."jobOffer-list.php");
    }

    public function Add($empresaId,$JobPositionId,$idJobOffer,$offerDescription){
        $alert = new Alert("","");
        try{
            $job = new JobOffer();
            $job = $job->setIdEmpresa($empresaId);
            $job = $job->setIdJobPosition($JobPositionId);
            $job = $job->setIdJobOffer($idJobOffer);
            $job = $job->setOfferDescription($offerDescription);

            $this->JobPositionDAO->Add($job);
        }catch(Exception $ex){
            $alert->setType("danger");
            $alert->setMessage($ex->getMessage());
        }finally{
            $this->ShowAddView();
        }
    }

    

}

?>