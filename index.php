<?php

// ES 1

// class Continent{
//     public $nameCont;
    
//     public function __construct($continent){
//         $this->nameCont = $continent;
//     }
// }

// class Country extends Continent{
//     public $nameCoun;
    
//     public function __construct($continent, $country){
//         parent::__construct($continent);
//         $this->nameCoun = $country;
//     }
// }

// class Region extends Country{
//     public $nameReg;

//     public function __construct($continent, $country, $region){
//         parent::__construct($continent, $country);
//         $this->nameReg = $region;
//     }
// }

// class Province extends Region{
//     public $nameProv;

//     public function __construct($continent, $country, $region, $province){
//         parent::__construct($continent, $country, $region);
//         $this->nameProv = $province;
//     }
// }

// class City extends Province{
//     public $nameCity;

//     public function __construct($continent, $country, $region, $province, $city){
//         parent::__construct($continent, $country, $region, $province);
//         $this->nameCity = $city;
//     }
// }

// class Address extends City{
//     public $nameAddr;

//     public function __construct($continent, $country,  $region, $province, $city, $address){
//         parent::__construct($continent, $country, $region, $province, $city);
//         $this->nameAddr = $address;
//     }

//     public function getMyCurrentLocation(){
//         echo "Io mi trovo in: $this->nameCont, $this->nameCoun, $this->nameReg, $this->nameProv, $this->nameCity, $this->nameAddr. \n";
//     }
// }

// $myLocation = new Address("Europe", "Italy", "Calabria", "CS", "Corigliano-Rossano", "Via Paola 1");
// $myLocation->getMyCurrentLocation();

// ES 2

class Vehicle{
    public $model;

    public $yearProd;
    
    public function __construct($model, $yearProd){
        $this->model = $model;
        $this->yearProd = $yearProd;
    }

    public function getInfo(){
        echo "Nome $this->model, Anno di produzione $this->yearProd \n";
    }
}

class Car extends Vehicle{
    public $porte;
    public $typecar;

    public function __construct($model, $yearProd, $porte, $typecar){
        parent::__construct($model, $yearProd);
        $this->porte = $porte;
        $this->typecar = $typecar;
    }

    public function numeroPorte(){
        echo "Ha $this->porte porte";
    }

    public function carType(){
        echo "E' una $this->typecar";
    }
}

class Bike extends Vehicle{
    public $type;

    public function __construct($model, $yearProd, $type){
        parent::__construct($model, $yearProd);
        $this->type = $type;
    }

    public function nameType(){
        echo "E' di tipo $this->type";
    }
}

$vehicle1 = new Car("Fiat Panda", 2004, 5, "City Car");
$vehicle2 = new Car("Ford Mustang GT", 2020, 4, "Muscle");
$vehicle3 = new Bike("BMW R 1250 GS", 2023, "Scrambler");

echo $vehicle1->getInfo() . "\n";
echo $vehicle1->numeroPorte() . "\n";
echo $vehicle1->carType() . "\n";
echo $vehicle2->getInfo() . "\n";
echo $vehicle2->numeroPorte() . "\n";
echo $vehicle2->carType() . "\n";
echo $vehicle3->getInfo() . "\n";
echo $vehicle3->nameType() . "\n";