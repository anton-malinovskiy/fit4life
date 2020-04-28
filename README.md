# Fit4Life functional automation tests

Functional and regression e2e tests for Fit4Life web page.  

## Getting Started

These instructions will get you a copy of the project up and running on your local machine. 

### Prerequisites

What things you need to install the software and how to install them

```
PHP
Composer
PHPUnit
facebook/WebDriver
```

### Installing

Install PHP 7

```
MacOS:
https://www.php.net/manual/en/install.macosx.php
Linux:
https://www.php.net/manual/en/install.unix.debian.php
```

Install Composer

```
MacOS/Linux:
https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos
```

Clone repository

```
https://github.com/anton-malinovskiy/fit4life.git
```

Install php-webdriver previously Facebook/WebDriver

```
composer require php-webdriver/webdriver
```

Install PHPunit-Selenium

```
php composer.phar install phpunit/phpunit-selenium
```

Install PHPunit

```
https://phpunit.de/manual/6.5/en/installation.html
```


## Running the tests

Locally tests should be run with composer command. Like: composer <nameOfTestFile>

Example:

```
composer startTestLogInPos
```
Remotely tests are configured to launch in Jenkins


## Authors

* **Anton Malinovskiy** 


