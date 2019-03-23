<?php

namespace Http;

require_once __DIR__ . '/apiAdapter.php';

class TicTacToeAdapter implements apiAdapter
{
    private $api;

    public function __construct(TictactoeApi $api) {
        $this->api = $api;
    }

    public function play()
    {
        return $this->api->play();
    }

    public function rateMove($playerUnit)
    {
        $this->api->rateMove($playerUnit);
    }

    public function makeMove($boardState, $playerUnit = 'X')
    {
        $this->api->makeMove($boardState, $playerUnit = 'X');
    }
}