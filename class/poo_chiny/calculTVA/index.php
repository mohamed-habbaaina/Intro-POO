<?php
    class Facture {
    const TVA = 20;
        public function monantTTC($ht){
        return $ht * (1 + (Facture::TVA / 100));
        }
    }
$facteur = new Facture();

echo $facteur->monantTTC(500);