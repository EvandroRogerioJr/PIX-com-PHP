<?php

require __DIR__.'/vendor/autoload.php';

use \App\Pix\Payload;
use Mpdf\QrCode\QrCode;
use Mpdf\QrCode\Output;


//INSTANCIA PRINCIPAL PAYLOAD PIX
$obPayload = (new Payload)->setPixKey('+5512996744295')
                          ->setDescription('Pagamento para Evandro Junior')
                          ->setMerchantName('Evandro Junior')
                          ->setMerchantCity('Jacarei')
                          ->setTxtid('29111999')
                          ->setAmount('100.00');


//CODIGO PAGAMENTO PIX
$payloadQrCode = $obPayload->getPayload();


//QR CODE
$obQrCode = new QrCode($payloadQrCode);

//IMAGEM DO QRCODE
$image = (new Output\Png)->output($obQrCode, 400);


header('Content-Type: image/png');
echo $image;

?>