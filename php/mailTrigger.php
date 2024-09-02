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
            $mail->Body = "
            Dear {$data['name']},
    
            Thank you for reaching out to Iceil. I hope this message finds you well.
    
            Attachments
    
            1. Iceil Project Gallery - Few images of our 1500+ Projects Executed across India - https://iceilsystems.com/wp-content/uploads/2023/11/Iceil-Project-Gallery.pdf
            2. Iceil Product Literature and Landscape - https://iceilsystems.com/wp-content/uploads/2023/11/Iceil-Product-Literature-Network.pdf
            3. Iceil Corporate Brochure - https://iceilsystems.com/wp-content/uploads/2024/05/Iceil-Corporate-Brochure-2024.pdf.
    
            Highlights of Iceil Stretch Ceilings
    
            - No. 1 Stretch Ceiling Manufacturer in India
            - Our Lighting Solutions are the best in comparison with our competitors
            - ISO 9001:2015 TUV Nord Certified factory in Chennai, India
            - 3 Days SLA for projects across India
            - 37+ Partners across India to handle installation support and services
            - 2000+ Project Executions Across India
            - In-House 5 Meter UV Printing Technology
            - Customized Lighting through Aluminum extruded profiles with any shape and size - In-house Production
            - European Quality Ceiling and Lighting Solutions
            - Only BS1D0 Fire retardant ceilings
            - Approved by major design agencies across India
    
            We will soon reach out to you for delivering a world-class stretch ceiling and customized lighting experience.
    
            Thanks & Regards,
            Iceil Team
            ";
    

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
            $mail->Body = "
            Dear {$data['name']},
    
            Thank you for reaching out Iceil.  I hope this message finds you well.

            Attachments

            1.Iceil Project Gallery - Few images of our 1500+ Projects Executed across India - https://iceilsystems.com/wp-content/uploads/2023/11/Iceil-Project-Gallery.pdf
            2.Iceil Product Literature and Landscape https://iceilsystems.com/wp-content/uploads/2023/11/Iceil-Product-Literature-Network.pdf
            3.Iceil Corporate Brochure https://iceilsystems.com/wp-content/uploads/2024/05/Iceil-Corporate-Brochure-2024.pdf.

            Highlights of Iceil Stretch Ceilings

            No. 1 Stretch Ceiling Manufacturer in India
            Our Lighting Solutions are the best in comparison with our competitors
            ISO 9001:2015 TUV Nord Certified factory in Chennai, India
            3 Days SLA for projects across  India
            37+ Partners across India to handle installation support and services
            2000+ Project Executions Across India
            In-House 5 Meter UV Printing Technology
            Customized Lighting through Aluminum extruded profiles with any shape and size - In-house Production
            European Quality Ceiling and Lighting Solutions
            Only BS1D0 Fire retardant ceilings
            Approve by major design agencies across India

            We will soon reach out you for discussing about our collaboration opportunities

            Thanks & Regards

            Iceil Team
            ";


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
                collaboration: {$data['collaboration']}
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
            // Send email to enquirer
            $mail->addAddress($data['emailone']);
            $mail->Subject = "Your enquiry is taken into consideration - " . $data['nameone'];
            $mail->Body = "
                Dear {$data['nameone']},
                Thank you for your brochure request. Please download Corporate Brochure from below link.

                https://project.iceilsystems.com/assets/stock/technical-know-how/iceil%20corporate%20brochuer%202024%20np.pdf

                Highlights of Iceil Stretch Ceilings

                No. 1 Stretch Ceiling Manufacturer in India
                Our Lighting Solutions are the best in comparison with our competitors
                ISO 9001:2015 TUV Nord Certified factory in Chennai, India
                3 Days SLA for projects across  India
                37+ Partners across India to handle installation support and services
                2000+ Project Executions Across India
                In-House 5 Meter UV Printing Technology
                Customized Lighting through Aluminum extruded profiles with any shape and size - In-house Production
                European Quality Ceiling and Lighting Solutions
                Only BS1D0 Fire retardant ceilings
                Approve by major design agencies across India

                Thanks & Regards

                Iceil Team";
    

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
            $mail->Subject = "New enquiry - " . $data['nameone'];
            $mail->Body = "Name: {$data['nameone']}\nNumber: {$data['telone']}\nEmail: {$data['emailone']}";

            $mail->send();
            $this->valid['success'] = true;
            $this->valid['message'] = "Mail sent successfully to admin.";
        } catch (Exception $e) {
            $this->valid['message'] = "Failed to send mail to admin: " . $mail->ErrorInfo;
        }
    
        return $this->valid;
    }
    
     //mail from brochureRequest two
     public function brochuretwoRequest($data) {
        $mail = $this->configureMailer();
    
        try {
            // Send email to enquirer
            $mail->addAddress($data['emailtwo']);
            $mail->Subject = "Your enquiry is taken into consideration - " . $data['nametwo'];
            $mail->Body = "
                Dear {$data['nametwo']},
                Thank you for your brochure request. Please download Lighting Brochure from below link.

                https://project.iceilsystems.com/assets/stock/technical-know-how/Iceil%20Lighting%20Brochure.pdf

                Highlights of Iceil Stretch Ceilings

                No. 1 Stretch Ceiling Manufacturer in India
                Our Lighting Solutions are the best in comparison with our competitors
                ISO 9001:2015 TUV Nord Certified factory in Chennai, India
                3 Days SLA for projects across  India
                37+ Partners across India to handle installation support and services
                2000+ Project Executions Across India
                In-House 5 Meter UV Printing Technology
                Customized Lighting through Aluminum extruded profiles with any shape and size - In-house Production
                European Quality Ceiling and Lighting Solutions
                Only BS1D0 Fire retardant ceilings
                Approve by major design agencies across India

                Thanks & Regards

                Iceil Team";
    

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
            $mail->Subject = "New enquiry - " . $data['nametwo'];
            $mail->Body = "Name: {$data['nametwo']}\nNumber: {$data['teltwo']}\nEmail: {$data['emailtwo']}";

            $mail->send();
            $this->valid['success'] = true;
            $this->valid['message'] = "Mail sent successfully to admin.";
        } catch (Exception $e) {
            $this->valid['message'] = "Failed to send mail to admin: " . $mail->ErrorInfo;
        }
    
        return $this->valid;
    }

    //mail from brochureRequest three
    public function brochurethreeRequest($data) {
        $mail = $this->configureMailer();
    
        try {
            // Send email to enquirer
            $mail->addAddress($data['emailthree']);
            $mail->Subject = "Your enquiry is taken into consideration - " . $data['namethree'];
            $mail->Body = "
                Dear {$data['namethree']},
                Thank you for your brochure request. Please download Technical Specification from below link.

                https://project.iceilsystems.com/assets/stock/technical-know-how/Iceil_Technical%20Spec_Updated.pdf

                Highlights of Iceil Stretch Ceilings

                No. 1 Stretch Ceiling Manufacturer in India
                Our Lighting Solutions are the best in comparison with our competitors
                ISO 9001:2015 TUV Nord Certified factory in Chennai, India
                3 Days SLA for projects across  India
                37+ Partners across India to handle installation support and services
                2000+ Project Executions Across India
                In-House 5 Meter UV Printing Technology
                Customized Lighting through Aluminum extruded profiles with any shape and size - In-house Production
                European Quality Ceiling and Lighting Solutions
                Only BS1D0 Fire retardant ceilings
                Approve by major design agencies across India

                Thanks & Regards

                Iceil Team";
    

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
            $mail->Subject = "New enquiry - " . $data['namethree'];
            $mail->Body = "Name: {$data['namethree']}\nNumber: {$data['telthree']}\nEmail: {$data['emailthree']}";

            $mail->send();
            $this->valid['success'] = true;
            $this->valid['message'] = "Mail sent successfully to admin.";
        } catch (Exception $e) {
            $this->valid['message'] = "Failed to send mail to admin: " . $mail->ErrorInfo;
        }
    
        return $this->valid;
    }

    
    //mail from brochureRequest four
    public function brochurefourRequest($data) {
        $mail = $this->configureMailer();
    
        try {
            // Send email to enquirer
            $mail->addAddress($data['emailfour']);
            $mail->Subject = "Your enquiry is taken into consideration - " . $data['namefour'];
            $mail->Body = "
                Dear {$data['namefour']},
                Thank you for your brochure request. Please download Project Gallery from below link.

                https://project.iceilsystems.com/assets/stock/technical-know-how/Iceil%20Project%20Gallery.pdf

                Highlights of Iceil Stretch Ceilings

                No. 1 Stretch Ceiling Manufacturer in India
                Our Lighting Solutions are the best in comparison with our competitors
                ISO 9001:2015 TUV Nord Certified factory in Chennai, India
                3 Days SLA for projects across  India
                37+ Partners across India to handle installation support and services
                2000+ Project Executions Across India
                In-House 5 Meter UV Printing Technology
                Customized Lighting through Aluminum extruded profiles with any shape and size - In-house Production
                European Quality Ceiling and Lighting Solutions
                Only BS1D0 Fire retardant ceilings
                Approve by major design agencies across India

                Thanks & Regards

                Iceil Team";
    

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
            $mail->Subject = "New enquiry - " . $data['namefour'];
            $mail->Body = "Name: {$data['namefour']}\nNumber: {$data['telfour']}\nEmail: {$data['emailfour']}";

            $mail->send();
            $this->valid['success'] = true;
            $this->valid['message'] = "Mail sent successfully to admin.";
        } catch (Exception $e) {
            $this->valid['message'] = "Failed to send mail to admin: " . $mail->ErrorInfo;
        }

        return $this->valid;
    }

    //mail from brochureRequest five
    public function brochurefiveRequest($data) {
        $mail = $this->configureMailer();
    

        try {
            // Send email to enquirer
            $mail->addAddress($data['emailfive']);
            $mail->Subject = "Your enquiry is taken into consideration - " . $data['namefive'];
            $mail->Body = "
                Dear {$data['namefive']},
                Thank you for your brochure request. Please download Product Literature and Landscape from below link.

                https://project.iceilsystems.com/assets/stock/technical-know-how/Iceil-Product-Literature-Network.pdf

                Highlights of Iceil Stretch Ceilings

                No. 1 Stretch Ceiling Manufacturer in India
                Our Lighting Solutions are the best in comparison with our competitors
                ISO 9001:2015 TUV Nord Certified factory in Chennai, India
                3 Days SLA for projects across  India
                37+ Partners across India to handle installation support and services
                2000+ Project Executions Across India
                In-House 5 Meter UV Printing Technology
                Customized Lighting through Aluminum extruded profiles with any shape and size - In-house Production
                European Quality Ceiling and Lighting Solutions
                Only BS1D0 Fire retardant ceilings
                Approve by major design agencies across India

                Thanks & Regards

                Iceil Team";
    

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
            $mail->Subject = "New enquiry - " . $data['namefive'];
            $mail->Body = "Name: {$data['namefive']}\nNumber: {$data['telfive']}\nEmail: {$data['emailfive']}";

            $mail->send();
            $this->valid['success'] = true;
            $this->valid['message'] = "Mail sent successfully to admin.";
        } catch (Exception $e) {
            $this->valid['message'] = "Failed to send mail to admin: " . $mail->ErrorInfo;
        }

        return $this->valid;
    }

}
?>
