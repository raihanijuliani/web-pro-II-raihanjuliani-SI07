<?php
class Dispenser {
    protected $volume;
    protected $hargasegelas;
    private $volumegelas;
    public $namaminuman;

    public function isi($vol) {
        $this -> volume = $vol;
    }
}
?>