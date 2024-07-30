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
            $mail->addAddress("mugirajan95@gmail.com"); // Admin's email address
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

    //mail from brochureRequest
    public function brochureRequest($data) {
        $mail = $this->configureMailer();
    
        try {
            $pdfPath = '../images/Iceil_Technical Spec_Updated.pdf'; 
    
            if (!file_exists($pdfPath)) {
                throw new Exception("Could not access file: $pdfPath");
            }
    
            $mail->addAttachment($pdfPath, basename($pdfPath));
    
            $mail->addAddress($data['emailone']);
            $mail->Subject = "Your Brochure Request";
            $mail->Body = "Dear {$data['nameone']},\n\nThank you for your brochure request. Please find attached Corporate Brochure.\n\nThanks and Regards,\nTeam ICEIL";
    
            if (!$mail->send()) {
                throw new Exception($mail->ErrorInfo);
            }
    
            // Send email to admin
            $mail->clearAddresses();
            $mail->addAddress("mugirajan95@gmail.com");
            $mail->Subject = "Brochure Request from {$data['nameone']}";
            $mail->Body = "Name: {$data['nameone']}\nEmail: {$data['emailone']}";
    
            if (!$mail->send()) {
                throw new Exception($mail->ErrorInfo);
            }
    
            $this->valid['success'] = true;
            $this->valid['message'] = "Brochure request sent successfully.";
        } catch (Exception $e) {
            error_log("Error in brochureRequest: " . $e->getMessage());
            $this->valid['message'] = "Failed to send brochure request: " . $e->getMessage();
        }
    
        return $this->valid;
    }
    
    
     //mail from brochureRequest two
     public function brochuretwoRequest($data) {
        $mail = $this->configureMailer();
    
        try {
            $pdfPath = '../images/Iceil lighting brochure.pdf'; 
    
            if (!file_exists($pdfPath)) {
                throw new Exception("Could not access file: $pdfPath");
            }
    
            $mail->addAttachment($pdfPath, basename($pdfPath));
    
            $mail->addAddress($data['emailtwo']);
            $mail->Subject = "Your Brochure Request";
            $mail->Body = "Dear {$data['nametwo']},\n\nThank you for your brochure request. Please find attached Lighting Brochure.\n\nThanks and Regards,\nTeam ICEIL";
    
            if (!$mail->send()) {
                throw new Exception($mail->ErrorInfo);
            }
    
            // Send email to admin
            $mail->clearAddresses();
            $mail->addAddress("mugirajan95@gmail.com");
            $mail->Subject = "Brochure Request from {$data['nametwo']}";
            $mail->Body = "Name: {$data['nametwo']}\nEmail: {$data['emailtwo']}";
    
            if (!$mail->send()) {
                throw new Exception($mail->ErrorInfo);
            }
    
            $this->valid['success'] = true;
            $this->valid['message'] = "Brochure request sent successfully.";
        } catch (Exception $e) {
            error_log("Error in brochureRequest: " . $e->getMessage());
            $this->valid['message'] = "Failed to send brochure request: " . $e->getMessage();
        }
    
        return $this->valid;
    }

     //mail from brochureRequest
     public function brochurethreeRequest($data) {
        $mail = $this->configureMailer();
    
        try {
            $pdfPath = '../images/Iceil_Technical Spec_Updated.pdf'; 
    
            if (!file_exists($pdfPath)) {
                throw new Exception("Could not access file: $pdfPath");
            }
    
            $mail->addAttachment($pdfPath, basename($pdfPath));
    
            $mail->addAddress($data['emailthree']);
            $mail->Subject = "Your Brochure Request";
            $mail->Body = "Dear {$data['namethree']},\n\nThank you for your brochure request. Please find attached Technical Spec.\n\nThanks and Regards,\nTeam ICEIL";
    
            if (!$mail->send()) {
                throw new Exception($mail->ErrorInfo);
            }
    
            // Send email to admin
            $mail->clearAddresses();
            $mail->addAddress("mugirajan95@gmail.com");
            $mail->Subject = "Brochure Request from {$data['namethree']}";
            $mail->Body = "Name: {$data['namethree']}\nEmail: {$data['emailthree']}";
    
            if (!$mail->send()) {
                throw new Exception($mail->ErrorInfo);
            }
    
            $this->valid['success'] = true;
            $this->valid['message'] = "Brochure request sent successfully.";
        } catch (Exception $e) {
            error_log("Error in brochureRequest: " . $e->getMessage());
            $this->valid['message'] = "Failed to send brochure request: " . $e->getMessage();
        }
    
        return $this->valid;
    }

}
?>
