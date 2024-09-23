<?php

require __DIR__ . '/vendor/autoload.php';

use Game\Player;
use Game\GameLoop;

// Khởi tạo người chơi
$player = new Player('SpaceShip', 10);

// Khởi tạo vòng lặp sự kiện của trò chơi
$gameLoop = new GameLoop($player);

// Bắt đầu trò chơi
$gameLoop->run();
