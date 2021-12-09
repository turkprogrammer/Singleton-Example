<?php
   
   class Singleton {

        protected static $instance = null;
        protected $counter = 0;

        static function getInstance(){
            if(static::$instance instanceof self){
                return static::$instance;
            }
            return static::$instance = new self;
        }
        
        private function __construct(){
            echo "Object created: ";
        }
        

        private function __clone(){

        }

        public function set(){
            $this->counter++;
        } 
        public function get(){
            return $this->counter;
        }       


   }

$obj = Singleton::getInstance();
$obj->set();
echo $obj->get();

$obj2 = Singleton::getInstance();
$obj2->set();
echo $obj2->get();