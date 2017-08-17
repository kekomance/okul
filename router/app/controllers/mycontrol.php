<?php
/**
 * Created by PhpStorm.
 * User: ANIL
 * Date: 17.8.2017
 * Time: 16:56
 */

class mycontrol extends maincontrollers
{
    public function method ($parametre=false){

        $degisken=12323456;
//["$degisken"]=1232456; = compact bunu bu hale dönüştürür aaray şekline
        $isim="anıl kobakoğlu";
        $data=(new user())->get();//models den aldım (autoload sağolsun)







        return view("home", compact("degisken","data","isim"));//home  stringini ve diğer değişkenleri view atıyoruz
    }


}