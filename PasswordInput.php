<?php


require_once __DIR__ . "/BaseInput.php";

class PasswordInput extends BaseInput
{

    public function renderInput(): string
    {
        $html = "<input type='password' name={$this->name} value={$this->value}>";

        return $html;
    }
}