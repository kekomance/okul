<?php
/**
 * Created by PhpStorm.
 * User: ANIL
 * Date: 17.8.2017
 * Time: 17:36
 */

class maincontrollers
{


    public function __construct()
    {


        function view($file,$degisken=false){ // mycontrolden "home" yazsını aldık ve home.php açıldı

            extract($degisken);//array ile gönderdiğimizi extract ile alıyoruz
            include_once "app/views/$file.php";

       }
    }
}