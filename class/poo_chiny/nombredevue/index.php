<?php
class Compteur {
    private $fp;
    private $nbr;

    public function __construct(){
        $this->fp=fopen("compteur.txt", "r+");
        $this->nbr=fgets($this->fp);
    }
  
    public function inc(){
        $this->nbr++;
        fseek($this->fp, 0);
        fputs($this->fp, $this->nbr);
    }
    public function afficher(){
        return $this->nbr;
    }
}
$nombreDeVue = new Compteur();
$nombreDeVue->inc();
echo $nombreDeVue->afficher();