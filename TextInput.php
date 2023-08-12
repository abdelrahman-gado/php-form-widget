<?php

require_once __DIR__ . "/BaseInput.php";

class TextInput extends BaseInput
{

    public function renderInput(): string
    {
        $html = "<input type='text' name={$this->name} value={$this->value}>";

        return $html;
    }
}