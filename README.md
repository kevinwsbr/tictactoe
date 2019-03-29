# Refactoring project - Tic Tac Toe

This is a fork of the original project, originally developed by [Roshdy](https://github.com/Rochdy). The intent is refactor the code and apply some software design patterns.

## Patterns Chosen
To this project, I chose to apply the three following patterns:

- **Adapter**: the adapter pattern is a software design pattern that allows the interface of an existing class to be used from another interface. It is often used to make existing classes work with others without modifying their source code [1].
- **Decorator**: the decorator pattern is a design pattern that allows behavior to be added to an individual object, dynamically, without affecting the behavior of other objects from the same class. The decorator pattern is often useful for adhering to the Single Responsibility Principle, as it allows functionality to be divided between classes with unique areas of concern [2].
- **Singleton**: the singleton pattern is a software design pattern that restricts the instantiation of a class to one "single" instance. This is useful when exactly one object is needed to coordinate actions across the system. The term comes from the mathematical concept of a singleton [3].

The first pattern was applied in this repository, and the last two were applied in [Checkers](https://github.com/kevinwsbr/checkers) repository.

## How to build

### Environment setup
The project in this repository is a PHP application with many dependencies. To execute and install the dependencies, you need to have an PHP interpreter available in your machine. The installation guide of PHP can be found [here](https://www.php.net/manual/en/install.php).

To install the dependencies, you need to have Composer dependency manager installed. The installation guide of Composer can be found [here](https://getcomposer.org/doc/00-intro.md)



### Original project
To execute the original version (with bad smells), navigate to `smells` folder and install the dependencies with:
```
composer install
```

After load composer repositories and generate autoload files, you can start the PHP bult-in server:
```
php -S localhost:8000
```

Then, open that address in your browser.

### Modified project
The process to execute the modified version is the same of the original version, but you have to navigate to `clear` folder to access the new code. Install the dependencies with:
```
composer install
```

After load composer repositories and generate autoload files, you can start the PHP bult-in server:
```
php -S localhost:8000
```

## Affected classes

The following old classes was affected:

- **TictactoeApi**: the only change in this class was to remove the implementation of the `MoveInterface` interface because the implementation of the interface adapter. 
- **moveInterface**: replaced by `apiAdapter` interface.

The following classes were created:

- **TicTacToeAdapter**: the `TicTacToeAdapter` class was developed to implement the `Adapter` pattern. It just provide a known interface that calls the `TictactoeApi` methods.
- **apiAdapter**: interface created to define the methods that which should be implemented by the adapters

## Affected functionalities

- Game start
- Pieces movement

## References

[1] [Adapter pattern](https://en.wikipedia.org/wiki/Adapter_pattern). originally in Wikipedia.

[2] [Decorator pattern](https://en.wikipedia.org/wiki/Decorator_pattern). originally in Wikipedia.

[3] [Singleton pattern](https://en.wikipedia.org/wiki/Singleton_pattern). originally in Wikipedia.