<?php

require __DIR__ . "/vendor/autoload.php";


//Create a class that represents an address - use different properties for each part of the address. It should have a fullAddress method, which will return the full address as a nicely formatted string.


class Address
{
    private $street;
    private $town;
    private $postcode;

    public function __construct($street, $town, $postcode)
    {
        $this->street= $street;
        $this->town = $town;
        $this->postcode = $postcode;
    }
    
    public function fullAddress()
    {
        return $this->address = "{$this->street}, {$this->town}, {$this->postcode}";
    }

    public function setStreet($newStreet)
    {
        return $this->street = $newStreet;
    }

    public function setPostcode($newPostcode)
    {
        return $this->postcode = $newPostcode;
    }

    public function setTown($newTown)
    {
        return $this->town = $newTown;
    }
}




$address = new Address("1 Made Up Street", "BS4 8TR", "Bristol");

// logs the full address neatly
dump($address->fullAddress()); // "1 Made Up Street, Bristol, BS4 8TR"

// can update the street, postcode, and town
$address->setStreet("12 Cantelope Way");
$address->setPostcode("SW5 8RQ");
$address->setTown("Swansea");

// logs the new full address neatly
dump($address->fullAddress()); // "12 Cantelope Way, Swansea, SW5 8RQ"