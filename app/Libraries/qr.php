<?php

namespace App\Libraries;

include RUTA_APP . '/ThirdParty/phpqrcode/qrlib.php';

use QRcode;

class qr
{
    public function construct()
    {
        log_message('Debug', 'PHPMailer class is loaded.');
    }

    public function create_qr($pass, $location,$name)
    {
        /*
        $size = 10;
        $level = 'M';
        $frame=3;


       $data= QRcode::png($pass, $location);
       var_dump("create_qr");
     */
        $dir = 'temp/';

        if (!file_exists($dir))
            mkdir($dir);

        $filename = $dir . $name.'.png';

        $tamanio = 15;
        $level = 'H';
        $frameSize = 1;
        $contenido = $pass;

        QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);

        
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
