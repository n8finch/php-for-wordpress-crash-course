<?php
/**
 * Install PHP DocBlocker: https://marketplace.visualstudio.com/items?itemName=neilbrayfield.php-docblocker
 */


class Check_It_Out {

    /**
     * Just a quick variable.
     *
     * @var string
     */
    public $quick = 'fast';


    /**
     * Constructor for the class.
     *
     * @param [type] $some_arg
     */
    public function __construct( $some_arg ) {
        $this->something = $some_arg;
    }

    /**
     * A function that does something.
     *
     * @param integer $number
     * @param string $something
     * @param array $some_array
     * @return int
     */
    public function do_something( int $number, string $something, array $some_array ) {
        // Do something with these params.
        return $number;
    }
}