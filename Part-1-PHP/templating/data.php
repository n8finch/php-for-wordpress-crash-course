<?php

class Post {

    public $title;
    public $content;

    public function __construct( $title, $content ) {
        $this->title = $title;
        $this->content = $content;
    }
}

$site_title = 'PHP Crash Course';

$posts = array(
    new Post( 'Hello World', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo voluptatibus obcaecati odit quasi totam rerum inventore officiis possimus! Culpa architecto beatae eum magnam, alias voluptatem officiis! Rem non corrupti earum?' ),
    new Post( 'Another Post', 'Ipsum dolor sit, amet consectetur adipisicing elit. Nemo voluptatibus obcaecati odit quasi totam rerum inventore officiis possimus! Culpa architecto beatae eum magnam, alias voluptatem officiis! Rem non corrupti earum?' ),
    new Post( 'Finally Finished', 'Dolor sit, amet consectetur adipisicing elit. Nemo voluptatibus obcaecati odit quasi totam rerum inventore officiis possimus! Culpa architecto beatae eum magnam, alias voluptatem officiis! Rem non corrupti earum?' ),
);