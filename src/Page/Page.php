<?php

namespace Fit4Life\Page;

use Facebook\WebDriver\Remote\RemoteWebDriver;
use PHPUnit\Framework\TestCase;

abstract class Page extends TestCase
{
    /** @var RemoteWebDriver */
    protected $driver;

    public function __construct(RemoteWebDriver $driver)
    {
        $this->driver = $driver;
    }
}
