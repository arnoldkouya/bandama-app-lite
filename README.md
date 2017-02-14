# Bandama Skeleton

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
    * config

* src

    Source code of project

    * controllers

        Controllers classes

    * models

        Project models for interacting with databases and other sources of data

    * views

        Contains views

* tests

    Contains unit tests for project

* var
    * logs

        Log files

* vendor

    Contains third party library, including Bandama Framework

* web
    * assets
        * css
        * images
        * js
    * data
    * plugins

        Contains plugins used in project e.g (bootstrap, jquery, etc.)


## Credits

- [Jean-François YOBOUE](https://github.com/jfyoboue)

## License

The Bandama Framework Skeleton is licensed under the MIT license. See [License File](LICENSE.md) for more information.