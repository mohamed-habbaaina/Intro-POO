<?php
    class Facture {
        public function monantTTC($ht){
        return $ht * (1 + (20 / 100));
        }
    }
$facteur = new Facture();

echo $facteur->monantTTC(300);