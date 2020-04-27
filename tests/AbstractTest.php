<?php

namespace Tests;

use Facebook\WebDriver\Remote\RemoteWebDriver;

abstract class AbstractTest
{
    /** @var RemoteWebDriver */
    protected $driver;

    public function __construct(RemoteWebDriver $driver)
    {
        $this->driver = $driver;
    }
}
