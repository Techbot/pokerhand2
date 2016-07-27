<?php

namespace Application\Domain;

class Card
{

    private $suit;
    private $value;
    private $score;

    public function __construct(string $card)
    {
        $this->value = substr($card,0,1);
        $this->suit  = substr($card,1,1);

        //$this->score = $this->getScore($this->value);

    }

    public function cardCompare(Card $otherCard){

        if($otherCard->value != $this->value){

            return -1;

        }

        return 0;
    }

    private function getScore($value)
    {

        switch ($value) {

            case ('A'):
                return 14;

            case ('K'):
                return 13;

            case ('Q'):
                return 12;

            case ('J'):
                return 11;

            case ('T'):
                return 10;

                return $value;
        }
    }
}