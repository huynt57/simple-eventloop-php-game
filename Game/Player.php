<?php

namespace Game;

class Player {
    public string $name;
    public int $position;
    public array $bullets;

    public function __construct(string $name, int $position = 0) {
        $this->name = $name;
        $this->position = $position;
        $this->bullets = [];
    }

    public function moveLeft(): void {
        $this->position--;
        echo "{$this->name} moved left to position {$this->position}\n";
    }

    public function moveRight(): void {
        $this->position++;
        echo "{$this->name} moved right to position {$this->position}\n";
    }

    public function shoot(): void {
        $bullet = new Bullet($this->position);
        $this->bullets[] = $bullet;
        echo "{$this->name} shot a bullet from position {$this->position}\n";
    }
}
