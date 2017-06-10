# Bandama Application Lite Skeleton

Bandama App Lite is a skeleton project for [Bandama Framework](https://github.com/jfyoboue/bandama-framework) that includes Monolog for logging and Kahlan for unit tests.

## Create a new project

It's recommended that you use [Composer](https://getcomposer.org/) to create project.

```bash
$ composer create-project --no-interaction bandama/app-lite [project-name]
```

This will create new Bandama project and all required dependencies including Bandama Framework, Monolog and Kahlan. Bandama Project requires PHP 5.5 or newer.

## Run the project

Got to the root directory of your project and run it typing

```bash
$ cd [project-name]
$ php -S localhost:8008 -t web web/app.php
```

Browse to http://localhost:8008


## Project structure

* app

    This folder contains globals elements of application. It contains App and Configuration classes.

    * core

        This folder contains App, Configuration and Controller classes which implements base application logic

    - App.php : This class allow to extend and customize application logic
    - Configuration.php : Class allowing customization of application configuration parameters
    - Controller.php : Base application controller class
    - config

        Config folder contains configuration parameters splitted in many files:

        - databases.php : Collection of databases configuration
        - parameters.php : Application base parameters
        - routes.php : Contains routes definition
        - services.php : Services used by application
        - sessions.php : User sessions parameters
        - settings.php : Merging of other configuration files

* spec

    Contains unit tests for project

* src

    Project source code

    - controllers

        Controllers classes

    - models

        Project models for interacting with databases and other sources of data

    - views

        Contains views

    - services

        Application services

* var
    * logs

        Log files

* vendor

    Contains third party library, including Bandama Framework, Monolog and Kahlan

* web

    This folder contains public files

    - app.php : Application entry point

    It is the entry point of application

    * assets
        * css
        * images
        * js

    * data

        Contains another assets and data

    * plugins

        Contains plugins used in project e.g (bootstrap, jquery, etc.)

## Change log

* 1.2.0
    - Adding translator component
    - Using [Kahlan](https://github.com/kahlan/kahlan) for unit tests
* 1.1.1
    - Bug fixed - Removing index.php file in .gitignore
* 1.1.0
    - Improvement of application setup
    - Adding HelloServiceTest class 
    - Adding basic layout content
    - Adding PDO Session Handler management
    
* 1.0.1
    - Bug fixed in .htaccess 

## Credits

- [Jean-François YOBOUE](https://github.com/jfyoboue)

## License

The Bandama Framework Skeleton is licensed under the MIT license. See [License File](LICENSE.md) for more information.