#INTRODUCTION
A support package that provides flexible and reusable helper methods and traits for commonly used functionalities.

The package requires PHP 7.0+ and follows the FIG standard PSR-4 to ensure a high level of interoperability between shared PHP code and is fully unit-tested.

Have a read through the Installation Guide.

[![Build Status](https://travis-ci.org/mygedung/support.svg?branch=1.0)](https://travis-ci.org/mygedung/support)

#INSTALLATION
The best and easiest way to install the Support package is with Composer.

##Preparation
Open your composer.json file and add the following to the require array:

``` bash
"mygedung/support": "1.0.*"
```

Note: Make sure that after the required changes your composer.json file is valid by running composer validate.

##Install the dependencies
Run Composer to install or update the new requirement.

``` bash
php composer install
```

or

``` bash
php composer update
```

Now you are able to require the vendor/autoload.php file to autoload the package.

#USAGE
In this section we'll show how you can make use of the available traits.

##EventTrait
The EventTrait makes it easy to add dispatching abilities to your classes.

``` json
use myGedung\Support\Traits\EventTrait;

class FooRepository {

    use EventTrait;

    public function foo()
    {
        $this->fireEvent('foo');
    }

}
```

##RepositoryTrait
The RepositoryTrait makes it easy to create new instances of a model and to retrieve or override the model during runtime.

``` json
use myGedung\Support\Traits\RepositoryTrait;

class FooRepository {

    use RepositoryTrait;

    public function foo()
    {
        return $this->createModel();
    }

}
```
