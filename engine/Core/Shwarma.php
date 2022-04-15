<?php

namespace App\Core;

class Shwarma
{
    public function getCost(): float
    {
        return $this->cost;
    }

    public function getIngredients(): array
    {
        return $this->ingridients;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}


