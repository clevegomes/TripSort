<?php

/**
 * Created by PhpStorm.
 * User: Developer1

 */

namespace  Test;
use  Cls\BusBoardingCard;

/**
 * This class is responsible in testing the BusBoardingCard class
 * It extends AbstractBoardingCardTest
 * Class BusBoardingCardTest
 * @package Test
 */
class BusBoardingCardTest  extends AbstractBoardingCardTest

{



 /**
 * Setting up all the Card objects before the test can run
 */
    public function setUp()
    {
        $this->boardingCard = new BusBoardingCard();
        $this->boardingCard->setBusServiceName('Test');
        $this->boardingCard->setBookingNo('Test123');
        $this->boardingCard->setPassengerName('Test Test');
        $this->boardingCard->setDescription('This is a test bus service');

    }



    /**
     * Cleaning up all the card object after the test has completed
     */
	public  function tearDown()
    {
        unset($this->boardingCard);
    }




}

//</code>