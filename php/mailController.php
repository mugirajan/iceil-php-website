<?php

require_once("./mailTrigger.php");

$sm = new sndMail();

if (isset($_POST["type"])) {
    
    $res = array("success" => false, "message" => "");

    switch ($_POST["type"]) {
        
        case "contactForm":
            $res = $sm->contactEnquiry($_POST);
            break;

        case "popupForm":
            $res = $sm->contactEnquiry($_POST);
            break;
        
        case "franchiseForm":
            $res = $sm->franchiseEnquiry($_POST);
            break;

        case "brochureForm":
            $res = $sm->brochureRequest($_POST);
            break;

            
        default:
            $res["success"] = false;
            $res["message"] = "Invalid request";
            break;
    }
    
    echo json_encode($res);
}

?>