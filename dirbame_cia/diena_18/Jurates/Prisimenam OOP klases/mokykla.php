<?php
class Mokykla{
    // Būtina priskirti kintamąjam prieinamumą (public, private, protected)
    public $miestas = 'tuscia';
    public $adresas = 'tuscia';
    private $darbuotojuSkaicius = 0;

    public function setDarbuotojuSkaicius($darbuotojuSkaicius){
        $this->darbuotojuSkaicius = $darbuotojuSkaicius;
    }
    public function getDarbuotojuSkaicius(){
        return $this->darbuotojuSkaicius;
    }

}