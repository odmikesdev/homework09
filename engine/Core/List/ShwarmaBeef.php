<?php

namespace App\Core\List;

use App\Core\Shwarma;
class ShwarmaBeef extends Shwarma
{
    public $title = 'Говяжья';
    public $cost = 75;
    public $ingridients = [
        'чесночный соус', 'говяжий окорок', 'огурцы маринованные',
        'маринованный лук с барбарисом и зеленью', 'салат коул слоу', 'тандырный лаваш',
        'помидоры свежие', 'хумус', 'соус тахин'
    ];
}