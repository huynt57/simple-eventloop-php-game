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
