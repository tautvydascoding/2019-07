<?php
include_once('B-klase.php');
// UZDUOTIS:
 // 1. sukurti dvi klases A ir B
 // "B" klase turi paveldi "A"
 // "A" klase turi kintamuosius:
 // name , plaukuSpalva, sirdiesYda
 // kurie yra "public", "private", "protected"

 // 2. SUSIKURTI "B" objekta
 // 3. atspausdinti visus kintamuosius (nenaudojant/nesikurti "A" objekto IR nenaudojant "echo" komandos "A" klaseje)

$objektasB = new B();

echo "Vardas: " . $objektasB->getVardas() . "<hr>";
echo "Širdies yda: " . $objektasB->getSirdiesYda() . "<hr>";
echo "Plaukų Spalva: " . $objektasB->plaukųSpalva . "<hr>";
