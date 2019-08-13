<?php
class A {
    public $name = 'name';
    private $plaukuSpalva = 'Hair color';
    protected $sirdiesYda = 'Sirdies yda';
    function duokPrivatu() {
        return $this->plaukuSpalva;
    }
}

class B extends A {
    function duokProtected() {
        return $this->sirdiesYda;
    }
}





// UZDUOTIS:
// 1. sukurti dvi klases A ir B
// "B" klase turi paveldi "A"
// "A" klase turi kintamuosius:
// name , plaukuSpalva, sirdiesYda
// kurie yra "public", "private", "protected"

// 2. SUSIKURTI "B" objekta
// 3. atspausdinti visus kintamuosius (nenaudojant/nesikurti "A" objekto IR nenaudojant "echo" komandos "A" klaseje)
