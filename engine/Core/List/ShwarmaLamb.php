<?php

namespace App\Core\List;

use App\Core\Shwarma;
class ShwarmaLamb extends Shwarma
{
    protected $title = 'Баранина';
    protected $cost = 85;
    protected $ingridients = [
        'острый соус', 'огурцы маринованные', 'кинза', 'помидоры свежие',
        'маринованный лук с барбарисом и зеленью',
        'мясо баранины', 'лаваш арабский'
    ];
}