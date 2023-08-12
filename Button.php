<?php

require_once __DIR__ . "/HTMLElement.php";

class Button extends HTMLElement
{

    public function __construct(protected string $text)
    {

    }


    public function render(): string
    {
        $html = "<button>{$this->text}</button>";

        return $html;
    }
}