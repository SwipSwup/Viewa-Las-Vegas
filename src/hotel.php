<?php
class Hotel
{
    private string $name;
    private string $dsc;

    function __construct(string $name, string $dsc) {
        $this->name = $name;
        $this->dsc = $dsc;
    }

    function getName(): string {
        return $this->name;
    }

    function getdsc(): string {
        return $this->dsc;
    }
}
