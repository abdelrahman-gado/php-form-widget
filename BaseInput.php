<?php

require_once __DIR__ . "/HTMLElement.php";

abstract class BaseInput extends HTMLElement
{

    public function __construct(
        protected string $name,
        protected string $label,
        protected string $value = ''
    ) {

    }

    public function render(): string
    {
        return sprintf("<div>
                    <label>%s</label><br>
                    %s
                </div>", $this->label, $this->renderInput());
    }

    abstract public function renderInput(): string;
}