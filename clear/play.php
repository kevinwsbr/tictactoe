<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/Http/TicTacToeAdapter.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $api = new \Http\TicTacToeAdapter(new \Http\TictactoeApi($_POST));

    $ticTacToeResponse = $api->play();

    Http\Response::send($ticTacToeResponse);
}
return;