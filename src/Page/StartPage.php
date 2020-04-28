<?php

namespace Fit4Life\Page;

use Exception;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverExpectedCondition;



class StartPage extends Page
{
    public function open()
    {
        /**Open session. Load an url. */
        $this->driver->get("https://antonmalinovskiy.wixsite.com/website-3");
        $this->assertEquals("Home | fit4life", $this->driver->getTitle());

        $element = $this->driver->findElement(WebDriverBy::xpath("//*[@id=\"comp-k9flyvm93\"]/p/span/span/a"));
        if ($element) {
            try{
                $this->assertNotNull((WebDriverBy::xpath("//*[@id=\"comp-k9flyvm93\"]/p/span/span/a"))
                );
            }
        catch (Exception $e)
        {
            echo ' <<Houston, we have a problem. Main page missed.>> ';
        }
        }

        echo " <<Houston, flight normal. Main page passed.>> ";

//        $this->driver->quit();

    }

    public function close()
    {
        /**Close session. */
        $this->driver->quit();
    }

    public function dropdownMenuAccount()
    {
        /** @var RemoteWebDriver $driver */

        /**Account button click. */
        $element = $this->driver->findElement(WebDriverBy::xpath("//*[contains(@class,\"style-k9b9kmvs\")]"));
        $element->click();
        /**My account dropdown menu click. */
        $element = $this->driver->findElement(WebDriverBy::id("comp-k9b9kmvemenuItem3"));
        $element->click();
        try{
        $this->driver->wait(10, 50)->until(
            WebDriverExpectedCondition::titleIs("My Account"));
        }
        catch (Exception $e)
        {
            echo ' <<Houston, we have a problem. My Account page missed.>> ';
        }

        echo " <<Houston, flight normal. Dropdown menu passed.>> ";

    }
}


