<?php

        class vehicle{


            public $make;
            public $model;
            public $year;
            public $fuel;

            public $dis=500;
            public $speed=50;
            public $time=5;
            public $flcnsm=4;       
            public $distance;
            public $maxspeed;
            public $eff;
          



            public function __construct($m,$md,$y,$f){

                  $this->make=$m;
                  $this->model=$md;
                  $this->year=$y;
                  $this->fuel=$f;
                          
                   } 

                      
        }

                class Truck extends vehicle{

                   public function show1(){
                           echo"<h2>Truck Features</h3>"."<br>";
                           echo "Truck make:".$this->make."<br>";
                           echo"Truck model:".$this->model."<br>";
                           echo"Truck year:".$this->year."<br>";
                           echo"Truck fuel:".$this->fuel."<br>";
                        
                
                           $this->distance=$this->speed*$this->time;
                           $this->maxspeed=($this->dis/$this->time);
                           $this->eff=($this->dis/$this->flcnsm);

                           echo"distance-".$this->distance."<br>";
                           echo"maxspeed-".$this->maxspeed."<br>";
                           echo"eff-".$this->eff."<br>";


                   }

                }

                 class car extends vehicle{
                    public function show2(){
                        echo"<h3>CAR Features</h3>"."<br>";
                        echo "Car make:".$this->make."<br>";
                        echo"Car model:".$this->model."<br>";
                        echo"Car year:".$this->year."<br>";
                        echo"Car fuel:".$this->fuel."<br>";
                     
                        $this->distance=$this->speed*$this->time;
                        $this->maxspeed=($this->dis/$this->time);
                        $this->eff=($this->dis/$this->flcnsm);

                        echo"distance-".$this->distance."<br>";
                        echo"maxspeed-".$this->maxspeed."<br>";
                        echo"eff-".$this->eff."<br>";

                 }
                }
                  class motorcycle extends vehicle{
                    public function show3(){
                    echo"<h3>Motorcycle Features</h3>"."<br>";
                    echo "Motorcycle make:".$this->make."<br>";
                    echo"Motorcycle model:".$this->model."<br>";
                    echo"Motorcycle year:".$this->year."<br>";
                    echo"Motorcycle fuel:".$this->fuel."<br>";
                    $this->distance=$this->speed*$this->time;
                    $this->maxspeed=($this->dis/$this->time);
                    $this->eff=($this->dis/$this->flcnsm);

                    echo"distance-".$this->distance."<br>";
                    echo"maxspeed-".$this->maxspeed."<br>";
                    echo"eff-".$this->eff."<br>";

         
             }
            }

          
             $t=new Truck("Tata","Tata Signa",1989,"Diesel");
             $c=new car("Mercedes","Mercedes G-63",1990,"CNG");
             $m=new motorcycle("Hero Honda","1/12 Honda NSR500",1965,"Petrol");
             

       
        $t->show1();
        $c->show2();
        $m->show3();



?>