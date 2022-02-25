<?php
/**
 * Classes and Objects
 * https://www.php.net/manual/en/language.oop5.php
 * 1. Declaring a class
 * 2. Declaring a default object
 * 3. Storing and accessing properties and methods
 * 4. Inheritance and overriding properties and methods.
 */


echo '<pre>'; 
class Animal {

    public $name;
    protected $gossip = 'Well I heard...';
    private $secret = 'Super secret';

    public function __construct( $name ) {
        $this->name = $name;
    }

    protected function speak( $phrase ) {
        echo "$this->name says, '$phrase'<br/>";
    }

    private function thinks( $thought ) {
        echo "$this->name thinks, '$thought'<br/>";
    }

    public function get_speak( $phrase ) {
        return $this->speak( $phrase );
    }

    public function get_thought( $thought ) {
        return $this->thinks( $thought );
    }
}

$muppet = new Animal( 'Fozzy' );
var_dump( "Hi my name is $muppet->name" );

// You can't do these:
// $muppet->speak( 'Waka waka waka' );
// $muppet->thinks( 'Waka waka waka' );

// But you can do these:
$muppet->get_speak( 'Waka waka waka' );
$muppet->get_thought( 'I am hungry!' );

$muppet->age = 35;
var_dump( $muppet );

class Dog extends Animal {

    public $type = 'mammal';
    public $has_hair = true;

    public function do_trick() {
        var_dump( 'Look look, I\'m rolling over!' );
    }

    // Override
    protected function speak( $phrase ) {
        echo "$this->name only says '$phrase'<br/>";
    }

    public function get_gossip() {
        return $this->gossip;
    }

    public function get_secret() {
        return $this->secret;
    }
}

$dog = new Dog( 'Fido' );
var_dump( "Hi my name is $dog->name" );
var_dump( "$dog->name is a $dog->type" );

$dog->do_trick();

// Override.
$dog->get_speak( 'Bow wow...' );
$dog->get_thought( 'I have so many thoughts...' );

// Can't do
// var_dump( $dog->gossip );
// var_dump( $dog->get_secret() );

// But you can do:
var_dump( $dog->get_gossip() );