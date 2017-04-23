# Bandama Application Lite Skeleton

This is a simple skeleton project for [Bandama Framework](https://github.com/jfyoboue/bandama-framework) that includes Monolog.

## Create a new project

It's recommended that you use [Composer](https://getcomposer.org/) to create project.

```bash
$ composer create-project --no-interaction bandama/app-lite bandama-project
```

This will create new Bandama project and all required dependencies including Bandama Framework. Bandama Project requires PHP 5.4 or newer.

## Run the project

Got to the root directory of your project and type

```bash
$ cd bandama-project
$ php -S 0.0.0.0:8008 -t web web/app.php
```

Browse to http://localhost:8008


## Project structure

* app
    This folder contains globals elements of application. It contains App and Configuration classes.
    - App.php : This class implements application logic
    - Configuration.php : Class for managing application configuration parameters
    - Controller.php : 
    * config
        Config folder contains configuration parameters splitted in many files:
        - databases.php : Collection of databases configuration
        - parameters.php : Application base parameters
        - routes.php : Contains routes
        - services.php : Collection of services
        - settings.php : Merging of other files

* src
    Project source code
    * controllers
        Controllers classes
    * models
        Project models for interacting with databases and other sources of data
    * views
        Contains views
    * services

* tests
    Contains unit tests for project

* var
    * logs
        Log files

* vendor
    Contains third party library, including Bandama Framework

* web
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

* 1.1.0
    - Improvement of application setup
* 1.0.1
    - Bug fixed in .htaccess 

## Credits

- [Jean-François YOBOUE](https://github.com/jfyoboue)

## License

The Bandama Framework Skeleton is licensed under the MIT license. See [License File](LICENSE.md) for more information.