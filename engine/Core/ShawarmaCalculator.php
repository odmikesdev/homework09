<?php

namespace App\Core;

class ShawarmaCalculator
{
    public $arr = array();

    /*
     * Quantity - Counter for identical orders
     */

    public function add(Shwarma $shawarma)
    {
        if (count($this->arr) > 0) {
            for ($item = 0; $item < count($this->arr); $item++) {
                $available = in_array($shawarma->getTitle(), $this->arr[$item]);
                if ($available) {
                    $this->arr[$item]['Quantity'] +=1;
                    continue;
                }
            }
            if (!$available) {
                $this->arr[] = array('Title' => $shawarma->getTitle(), 'Ingredients' => $shawarma->getIngredients(),
                    'Cost' => $shawarma->getCost(), 'Quantity' => 1);
            }
        } else {
            $this->arr[] = array('Title' => $shawarma->getTitle(), 'Ingredients' => $shawarma->getIngredients(),
                'Cost' => $shawarma->getCost(), 'Quantity' => 1);
        }

    }

    public function ingredients()
    {
        for ($item = 0; $item < count($this->arr); $item++) {
            $ingredientsSumm = array_merge($this->arr[$item]['Ingredients']);
        }
        $ingredientsSumm =array_unique($ingredientsSumm);
        return $ingredientsSumm;
    }

    public function price()
    {
        for ($item = 0, $costSumm=0; $item < count($this->arr); $item++) {
            $costSumm += $this->arr[$item]['Cost'] * $this->arr[$item]['Quantity'];
        }
        echo $costSumm;
        return $costSumm;
    }

}