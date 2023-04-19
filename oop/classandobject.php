<?php
//defining a class

class myClass{
    //properties
    public $name;
    public $phone;
    //methods
    
    function set_name($name)
    {
        $this->name = $name;
    }

    function set_phone($phone)
    {
        $this->phone = $phone;
    }

    function get_name()
    {
        return $this->name;
    }

    function get_phone()
    {
        return $this->phone;
    }
}

//creating object $person
$person = new myClass();
$person->set_name('Aakash');
$person->set_phone('9855655565655');

echo $person->get_name();
echo $person->get_phone();
?>