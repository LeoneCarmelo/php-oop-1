<?php

class Genre {
    public $type;

    public function __construct(string $type) {
        $this->type = $type;
    }
}