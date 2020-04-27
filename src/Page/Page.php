<?php

namespace Fit4Life\Page;

use Facebook\WebDriver\Remote\RemoteWebDriver;

abstract class Page
{
    /** @var RemoteWebDriver */
    protected $driver;

    public function __construct(RemoteWebDriver $driver)
    {
        $this->driver = $driver;
    }
}
