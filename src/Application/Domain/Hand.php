<?php

namespace Application\Domain;

class Hand
{
    private $cards = array();

    function __construct(array $cards)
    {
        $tempIndex=0;
        foreach ($cards as $card) {

            $cards[$tempIndex] = new Card($card);

            $tempIndex++;
        }

    }

    public function handCompare(Hand $secondHand)
    {

        $cardIndex = 0;

        foreach ($this->cards as $card) {

            if ($card->cardCompare($secondHand->cards[$cardIndex]) != 0) {

                return -1;
            }
            $cardIndex++;
        }
        return 0;
    }

}