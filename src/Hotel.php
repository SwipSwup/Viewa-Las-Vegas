<?php
class Hotel
{
    private string $name;
    private string $dsc;
    private string $adr;
    private string $img;

    function __construct(string $name, string $dsc, string $adr, string $img) {
        $this->name = $name;
        $this->dsc = $dsc;
        $this->adr = $adr;
        $this->img = $img;
    }

    function getName(): string {
        return $this->name;
    }

    function getDsc(): string {
        return $this->dsc;
    }

    function getAdr(): string {
        return $this->adr;
    }

    function getImg(): string {
        return $this->img;
    }
}