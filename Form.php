<?php

require_once __DIR__ . "/HTMLElement.php";

class Form extends HTMLElement
{
    /**
     * direct children of form
     * @var \HTMLElement[]
     */
    protected array $elements = [];


    public function __construct(private string $action = '', private string $method = 'GET')
    {

    }

    public function addElement(HTMLElement $element)
    {
        $this->elements[] = $element;
    }

    public function render(): string
    {
        $html = "<form action={$this->action} method={$this->method}>";

        foreach ($this->elements as $element) {
            $html .= $element->render();
        }

        $html .= "</form>";

        return $html;
    }
}