<?php

namespace Game;

use Revolt\EventLoop;

class GameLoop {
    private Player $player;
    private array $enemies;
    private int $enemyIdCounter = 1;
    private int $finishLine = 20;

    public function __construct(Player $player) {
        $this->player = $player;
        $this->enemies = [];
    }

    public function run(): void {
        // Lập lịch bắn đạn của người chơi mỗi 2 giây
        EventLoop::repeat(2, function () {
            $this->player->shoot();
        });

        // Lập lịch di chuyển viên đạn mỗi 0.5 giây
        EventLoop::repeat(0.5, function () {
            foreach ($this->player->bullets as $bullet) {
                $bullet->moveUp();
            }
        });

        // Lập lịch tạo tàu địch mỗi 3 giây
        EventLoop::repeat(3, function () {
            $position = rand(1, $this->finishLine);
            $enemy = new Enemy($this->enemyIdCounter++, $position);
            $this->enemies[] = $enemy;
            echo "Enemy spawned at position $position\n";
        });

        // Lập lịch di chuyển tàu địch mỗi giây
        EventLoop::repeat(1, function () {
            foreach ($this->enemies as $enemy) {
                $enemy->moveDown();
            }
        });

        // Lập lịch kiểm tra va chạm giữa đạn và tàu địch mỗi 0.1 giây
        EventLoop::repeat(0.1, function () {
            $this->checkCollisions();
        });

        // Bắt đầu vòng lặp sự kiện
        EventLoop::run();
    }

    private function checkCollisions(): void {
        foreach ($this->player->bullets as $bulletKey => $bullet) {
            foreach ($this->enemies as $enemyKey => $enemy) {
                if ($bullet->position === $enemy->position) {
                    unset($this->player->bullets[$bulletKey]);
                    unset($this->enemies[$enemyKey]);
                    echo "Enemy {$enemy->id} destroyed!\n";
                    return;
                }
            }
        }
    }
}
