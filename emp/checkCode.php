<?php
    //首先定义一个空字符串
    $checkCode="";
    //随机生成四个数并拼接起来
    for($i=1;$i<=4;$i++)
    {
        $checkCode.=rand(0,9);
    }
    session_start();
    $_SESSION['checkCode']=$checkCode;
    //开始绘制验证码

    //1.生成画布
    $im=@imagecreatetruecolor(45,25);
    //2.随机生成一个颜色
    $color=imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));
    //$color=imagecolorallocate($im,255,0,0);

    //3.绘制干扰线
    for($i=1;$i<=20;$i++)
    {
        imageline($im,0,rand(0,24),44,rand(0,24),imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255)));
    }
    //4.绘制字符串
    imagestring($im,5,3,3,$checkCode,$color);
    header("content-type: image/png");
    imagepng($im);

    //4.销毁图片
    imagedestroy($im);
?>
