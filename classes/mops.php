<?php

Class mops extends Dog
{
    public function sound(): string
    {
        return "woof! woof!";
    }

    public function hunt(): string
    {
        return "**whining piteously";
    }
}