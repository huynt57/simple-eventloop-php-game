<?php

namespace Game;

class Bullet {
    public int $position;

    public function __construct(int $position) {
        $this->position = $position;
    }

    public function moveUp(): void {
        $this->position++;
        echo "Bullet moved up to position {$this->position}\n";
    }
}
