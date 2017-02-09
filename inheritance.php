<?php
/**
 * Created by PhpStorm.
 * User: Phil
 * Date: 09.02.2017
 * Time: 21:35
 */

class Cl1{
    public function write(){
        echo 'I can read'."\r\n";
    }
}

class Cl1_1 extends Cl1{
    public function read()
    {
        echo 'I can read'."\r\n";
    }
}
class Cl1_2 extends Cl1{
    public function hear()
    {
        echo 'I can hear'."\r\n";
    }
}

$Obj=new Cl1();
$Obj1=new Cl1_1();
$Obj2=new Cl1_2();

if($Obj instanceof Cl1){
    echo '$Obj is instanceof Cl1'."\r\n";
}

if($Obj1 instanceof Cl1){
    echo '$Obj1 is instanceof Cl1'."\r\n";
}

if($Obj2 instanceof Cl1){
    echo '$Obj2 is instanceof Cl1'."\r\n";
}