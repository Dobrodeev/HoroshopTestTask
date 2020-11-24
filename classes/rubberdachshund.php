<?php

Class rubberdachshund extends Dog
{
    public function sound(): string
    {
        return "beep! beep!";
    }

    public function hunt(): string
    {
        return "**no reaction";
    }
}