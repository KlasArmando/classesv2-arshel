<?php
class Auto{
    public $merk;
    public $type;
    public $kenteken;
    public $kmstand;
    public $apkdatum;
    public  $kleur;



}

$auto1 = new Auto();
$auto1->merk = 'polo';
$auto1->type = 'golf';
$auto1->kenteken = 'zg-gf-18';
$auto1->kmstand = 259402;
$auto1->apkdatum = '13-09-2019';
$auto1->kleur = 'zwart';


echo $auto1->merk . "<br>";
echo $auto1->type . "<br>";
echo $auto1->kenteken . "<br>";
echo $auto1->kmstand . "<br>";
echo $auto1->apkdatum . "<br>";
echo $auto1->kleur . "<br>";

class Klant {
    public $naam;
    public $adres;
    public  $email;
    public $telnum;
}

$klant1 = new Klant();

$klant1->naam = 'arshel';
$klant1->adres = 'arshestraat 12';
$klant1->email = 'arsheslmefor@hotmail.com';
$klant1->telnum = '0644182615';
