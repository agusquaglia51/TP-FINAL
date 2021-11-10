<?php 

// Archivo donde se controlan las JobPositions y se redirigen las vistas del mismo
namespace Controllers;

use DAO\JobPositionDAO as JobPositionDAO;
use Exception;
use Models\JobPositions as JobPositions;
use Alert;

class JobPositionController{
    private $JobPositionDAO;

    public function __construct(){
        $this->JobPositionDAO = new JobPositionDAO();
    }

    public function ShowApplyView(){
        require_once(VIEWS_PATH."jobPosition-apply.php");
    }


    //trae las posiciones de trabajo de la api
    public function bringJobPositions(){
        $ch = CURL_INIT();

        $url = 'https://utn-students-api.herokuapp.com/api/JobPosition';
        $header = array('x-api-key: 4f3bceed-50ba-4461-a910-518598664c08');

        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_HTTPHEADER, $header);

        $response = curl_exec($ch);
        $arrayToDecode = json_decode($response,true);

        try{
            foreach($arrayToDecode as $valuesArray){

                $jobP= new JobPositions();
                $jobP->getJobPositionId($valuesArray['jobPositionId']);
                $jobP->getCareerId($valuesArray['careerId']);
                $jobP->getDescriptionJ($valuesArray['description']);

                $this->JobPositionDAO->Add($jobP);
            } 
        }catch(Exception $ex){
            throw $ex;
        }
    }

    public function apply(){
        
    }


}
?>