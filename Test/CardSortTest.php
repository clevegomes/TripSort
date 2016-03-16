<?php
/**
 * Created by PhpStorm.
 * User: Developer1
 */

namespace  Test;


use  Cls\AirwaysBoardingCard;
use  Cls\BusBoardingCard;
use  Cls\CardSort;
use Cls\tripAbstract;


/**
 * This class is responsible in testing the CardSort Class
 * Class CardSortTest
 * @package Test
 */
class CardSortTest extends \PHPUnit_Framework_TestCase{


	private $unsortedCards =[];


    /**
     * Creating the boarding card list before the test can run
     */
    function setUp()
    {
        $airwaysBoardingCard =  new AirwaysBoardingCard();
        $airwaysBoardingCard->setFirstname('Firstname');
        $airwaysBoardingCard->setLastname('Lastname');
        $airwaysBoardingCard->setGate('D34');
        $airwaysBoardingCard->setGateclosingTime('29 Dec 2015');
        $airwaysBoardingCard->setSeat('29B');
        $this->unsortedCards[] =$airwaysBoardingCard;


        $busBordingCard = new BusBoardingCard();
        $busBordingCard->setBookingNo('Test123');
        $busBordingCard->setPassengerName('Test Test');
        $this->unsortedCards[] =$busBordingCard;
    }


    /**
     * Cleaning up the boarding card list after the test is finished
     */
    function  tearDown()
    {
        unset($this->unsortedCards);
    }

    private function validateSortArray($sortArry)
    {

        if(is_array($sortArry) && sizeof($sortArry) >0)
        {

            foreach($sortArry as $selelement)
            {
                if(!($selelement instanceof tripAbstract))
                {
                    return false;
                }
            }
            return true;

        }
        else
            return false;

    }

	public function testMergeSort()
	{

//        $sortObj->getSortedArray($this->unsortedCards)

		$sortObj = new CardSort();
        $this->assertTrue($this->validateSortArray($sortObj->getSortedArray($this->unsortedCards)),"Testing of Card Sort for valid unsorted array");
		$this->assertEquals(1,$sortObj->getSortedArray(null),"Testing of Card Sort for un valid sorted arrays ");


	}
}

//</code>