<?php
/**
 * 'ideaframwork is a php framework'
 * Created by 'cao'
 * User: 'cao<xiaoxiaott520@126.com>'
 * Date: 2017/2/17 0017
 * Time: 14:08
 */

namespace Endroid\QrCode;


class CustomQrCode
{
    private $size;
    private $padding;
    private $foregroundcolor;
    private $backgroundcolor;
    private $lable;
    private $lablesize;
    private $imagetype;

    function creat_qrcode()
    {
        $qrCode = new QrCode();
        $qrCode->setText('http://www.baidu.com')
            ->setSize(300)
            ->setPadding(10)
            ->setErrorCorrection('high')
            ->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0])
            ->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0])
          //  ->setLabel('Scan the code')
            ->setLabelFontSize(16)
            ->setImageType(QrCode::IMAGE_TYPE_PNG);

// now we can directly output the qrcode
        header('Content-Type: ' . $qrCode->getContentType());
        $qrCode->render();


// save it to a file
        //   $qrCode->save('qrcode.png');

// or create a response object
     //   $response = new Response($qrCode->get(), 200, ['Content-Type' => $qrCode->getContentType()]);
    }
}