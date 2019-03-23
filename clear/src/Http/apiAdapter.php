<?php

namespace Http;

interface apiAdapter
{
    public function rateMove($playerUnit);
    public function play();
    public function makeMove($boardState, $playerUnit = 'X');
}