<?php

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Tests\Functional\LoginFormFuncTests;

require_once 'vendor/autoload.php';

$caps = array(
    "browser" => "Chrome",
    "browser_version" => "81.0",
    "os" => "Windows",
    "os_version" => "10",
    "resolution" => "1024x768",
    "name" => "Test login form negative mail."
);
$webDriver = RemoteWebDriver::create(
    "https://antonmalinovskiy1:osqxUEUFyHcYPwSemA2y@hub-cloud.browserstack.com/wd/hub",
    $caps
);

$loginTestNegPass = new LoginFormFuncTests($webDriver);
$loginTestNegPass->testLogInNegMail();


