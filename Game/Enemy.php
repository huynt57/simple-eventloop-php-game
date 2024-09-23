<?php

namespace Game;

class Enemy {
    public int $position;
    public int $id;

    public function __construct(int $id, int $position) {
        $this->id = $id;
        $this->position = $position;
    }

    public function moveDown(): void {
        $this->position--;
        echo "Enemy {$this->id} moved down to position {$this->position}\n";
    }
}
