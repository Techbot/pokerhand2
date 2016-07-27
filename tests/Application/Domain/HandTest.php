<?php

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Application\Domain\Hand;


class HandTest extends PHPUnit_Framework_TestCase
{
    function test_two_hands_for_tie(){

        $firstHand = new Hand(['2H', '3D', '5S', '9C', 'KD']);

        $secondHand = new Hand(['7D', '3H', '5C', '9S', 'KH']);

        $result = $firstHand->handCompare($secondHand);

        $this->assertEquals($result, 0);
    }
}
