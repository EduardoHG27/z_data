<?php

namespace App\Libraries;

include RUTA_APP. '/ThirdParty/phpqrcode/qrlib.php';
use QRcode;

class qr
{
    public function construct()
    {
        log_message('Debug', 'PHPMailer class is loaded.');
    }

    public function create_qr($pass,$location)
    {
        var_dump($location);

       $data= QRcode::png($pass,'/home/u928450450/domains/ecommerce343.com/public_html/');
    
     
    }

    /*
    public function data($location)
    { 


        $tempDir = $location;
        $codeContents = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a';

        $data=QRcode::png($codeContents, $tempDir.'.png', QR_ECLEVEL_H);
            
        
        // end displaying
        echo '<img src="'.$location.'006_L.png" />';
    }
*/
}
