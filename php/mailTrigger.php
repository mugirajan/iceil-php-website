<?php
require_once("./vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class sndMail
{
    
    private $valid = array("success" => false, "message" => "");

    public function __construct() {
        if (!session_id()) {
            session_start();
        }
    }

    private function configureMailer() {
        
        $mail = new PHPMailer(true); // Passing true enables exceptions
        $mail->isSMTP();
        $mail->Host = "smtp.hostinger.com";
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = "contact@blackitechs.com";
        $mail->Password = "Contact@bits#737";
        $mail->setFrom("contact@blackitechs.com", "Mail From Iceil solutions");
        return $mail;
    }

    //mail from contact
    public function contactEnquiry($data) {
        
        $mail = $this->configureMailer();

        try {
            // Send email to enquirer
            $mail->addAddress($data['email']);
            $mail->Subject = "Your enquiry is taken into consideration - " . $data['name'];
            $mail->Body = "<br /><br />Will get back to you shortly<br /><br />Thanks and Regards, <br />Team ICEIL";

            $mail->send();
            $this->valid['success'] = true;
            $this->valid['message'] = "Mail sent successfully to enquirer.";
        } catch (Exception $e) {
            $this->valid['message'] = "Failed to send mail to enquirer: " . $mail->ErrorInfo;
        }

        // Send email to admin
        try {

            $mail->clearAddresses(); // Clear previous recipient
            $mail->addAddress("info@iceilsystems.com"); // Admin's email address
            $mail->Subject = "New enquiry - " . $data['name'];
            $mail->Body = "
                Contact details:
                Name: {$data['name']} 
                Email: {$data['email']}
                Phone: {$data['phone']}
                State: {$data['state']}
                City: {$data['city']}
                Message:{$data['message']} 
            ";

            $mail->send();
            $this->valid['success'] = true;
            $this->valid['message'] = "Mail sent successfully to admin.";
        } catch (Exception $e) {
            $this->valid['message'] = "Failed to send mail to admin: " . $mail->ErrorInfo;
        }

        return $this->valid;
    }

    //mail from franchise
    public function franchiseEnquiry($data) {
        
        $mail = $this->configureMailer();

        try {
            // Send email to enquirer
            $mail->addAddress($data['email']);
            $mail->Subject = "Your enquiry is taken into consideration - " . $data['name'];
            $mail->Body = "<br /><br />Will get back to you shortly<br /><br />Thanks and Regards, <br />Team ICEIL";

            $mail->send();
            $this->valid['success'] = true;
            $this->valid['message'] = "Mail sent successfully to enquirer.";
        } catch (Exception $e) {
            $this->valid['message'] = "Failed to send mail to enquirer: " . $mail->ErrorInfo;
        }

        // Send email to admin
        try {

            $mail->clearAddresses(); // Clear previous recipient
            $mail->addAddress("info@iceilsystems.com"); // Admin's email address
            $mail->Subject = "New enquiry from Franchise- " . $data['name'];
            $mail->Body = "
                Contact details:
                Name: {$data['name']} 
                Email: {$data['email']}
                Phone: {$data['phone']}
                State: {$data['state']}
                City: {$data['city']}
                Message:{$data['message']} 
            ";

            $mail->send();
            $this->valid['success'] = true;
            $this->valid['message'] = "Mail sent successfully to admin from franchise.";
        } catch (Exception $e) {
            $this->valid['message'] = "Failed to send mail to admin from franchise: " . $mail->ErrorInfo;
        }

        return $this->valid;
    }

}
?>
