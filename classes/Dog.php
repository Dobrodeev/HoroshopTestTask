<?php
declare(strict_types=1);

//namespace classes\dogs;

/**
 * Class Dog
 */
abstract Class Dog
{
    /**
     * Если напиписать в input имя собаки и команду, возвращает действие собаки - какое-то слово
     * @return string
     */
    abstract public function sound(): string;

    /**
     * @return string
     */
    abstract public function hunt(): string;
}