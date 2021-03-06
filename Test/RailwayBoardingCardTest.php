<?php
/**
 * Created by PhpStorm.
 * User: Cleve
 */

namespace Test;
use Cls\RailwayBoardingCard;

/**
 * This class is responsible in testing the RailwayBoardingCard class
 * It extends AbstractBoardingCardTest
 * Class RailwayBoardingCardTest
 * @package Test
 */
class RailwayBoardingCardTest  extends AbstractBoardingCardTest {


/*
 * Creating the boarding card before the test can run
 */
    public function  setUp(){

        $this->boardingCard = new RailwayBoardingCard();
        $this->boardingCard->setRailRoadName('test');
        $this->boardingCard->setBoardingDate('12 Dec 2015');
        $this->boardingCard->setBoardingTime('12:30 pm');
        $this->boardingCard->setCarNo('56ERER');
        $this->boardingCard->setPassengerName('Test Test');
        $this->boardingCard->setRailRoadName('Test Company');
        $this->boardingCard->setRoute('Route XYZ');
        $this->boardingCard->setSeatType('Open');
        $this->boardingCard->setSeatNo('NA');
        $this->boardingCard->setDetails('Test details');


    }

    /**
     * Cleaning up the boarding card after the test is complete
     */
    public function tearDown()
    {
        unset($this->boardingCard);
    }




}

//</code>