# Space Shooter Game with Revolt PHP

This is a simple space shooter game built using the Revolt PHP event loop library. The game simulates a spaceship shooting at randomly appearing enemies. The spaceship and the bullets it shoots, as well as the enemies, are all managed asynchronously using an event loop provided by Revolt PHP.

## Table of Contents
- [Introduction](#introduction)
- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Game Mechanics](#game-mechanics)
- [Code Structure](#code-structure)
- [Contributing](#contributing)
- [License](#license)

## Introduction

In this game, you control a spaceship positioned at the bottom of the screen. The objective is to shoot down the enemy spaceships that appear randomly at the top and move downwards. If an enemy spaceship reaches the bottom without being destroyed, the game continues until all enemies are destroyed.

The game demonstrates the usage of the Revolt PHP event loop to handle multiple asynchronous actions such as moving bullets, generating enemies, and checking collisions.

## Features

- **Asynchronous Game Mechanics:** Uses Revolt PHP for handling multiple asynchronous events like enemy movement, bullet firing, and collision detection.
- **Event-Driven Architecture:** All actions in the game are managed through an event loop, providing smooth and efficient gameplay.
- **Simple and Extensible:** The game code is designed to be simple and easy to understand, making it a good starting point for learning event-driven programming in PHP.

## Requirements

- PHP 8.1 or higher
- Composer
- Revolt PHP library (`revolt/event-loop`)

## Installation

1. Clone this repository:

   ```bash
   git clone https://github.com/your-username/space-shooter-game.git
   cd space-shooter-game

2. Install the necessary dependencies using Composer:

## Usage
Run the game by executing the index.php file:
```
php index.php
```
The game will start running in the console, and you will see the actions of the spaceship, bullets, and enemies being printed on the screen.

The game will continue until all enemies are destroyed or the player decides to stop it manually.

## Game Mechanics
- Player Movement: The player spaceship can move left and right and shoot bullets.
- Shooting: The player spaceship automatically shoots bullets at regular intervals.
- Enemy Appearance: Enemies appear randomly at the top of the screen and move downwards.
- Collision Detection: When a bullet collides with an enemy, the enemy is destroyed and the bullet is removed from the game.
- Winning Condition: The game runs indefinitely for demonstration purposes. To implement a winning or losing condition, you can expand the GameLoop class.

## Code Structure
- index.php: Main entry point to start the game.
- game.php: Sets up the game environment and initializes the game loop.
- Game/Player.php: Represents the player’s spaceship, handles movement and shooting.
- Game/Enemy.php: Represents the enemy spaceships, handles movement downwards.
- Game/Bullet.php: Represents bullets shot by the player’s spaceship.
- Game/GameLoop.php: Manages the game loop using Revolt PHP, handles event scheduling and collision detection.

## Contributing
Contributions are welcome! If you have any suggestions or improvements, feel free to open an issue or submit a pull request. Please make sure to follow the coding standards and include appropriate tests.

## License
This project is licensed under the MIT License.
