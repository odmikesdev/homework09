<?php

namespace App\Core\List;

use App\Core\Shwarma;
class ShwarmaOdessa extends Shwarma
{
    public $title = 'Одесская';
    public $cost = 69;
    public $ingridients = [
        'огурцы маринованные', 'картофель жареный',
        'чесночный соус', 'тандырный лаваш', 'маринованный лук с барбарисом и зеленью',
        'мясо куриное', 'салат коул слоу', 'корейская морковь'
    ];
}