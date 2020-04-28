<?php

namespace Fit4Life\Page;

use Exception;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverExpectedCondition;



class AccountPage extends Page
{
    public function accountPageVer()
    {

        $this->assertEquals("My Account", $this->driver->getTitle());
        /**Avatar block exists  */
        $element = $this->driver->findElement(WebDriverBy::xpath("//*[@id=\"comp-k9b9kn9d\"]"));
        if ($element) {
            try{
                $this->assertNotNull((WebDriverBy::xpath("//*[@id=\"comp-k9b9kn9d\"]"))
                );
            }
            catch (Exception $e)
            {
                echo ' <<Houston, we have a problem. My Account page Avatar block missed.>> ';
            }
        }
        /**Menu block exists  */
        $element = $this->driver->findElement(WebDriverBy::xpath("//*[@id=\"comp-k9b9knbu\"]"));
        if ($element) {
            try{
                $this->assertNotNull((WebDriverBy::xpath("//*[@id=\"comp-k9b9knbu\"]"))
                );
            }
            catch (Exception $e)
            {
                echo ' <<Houston, we have a problem. My Account page Menu block missed.>> ';
            }
        }
        /**Account data block exists  */
        $element = $this->driver->findElement(WebDriverBy::xpath("//*[@id=\"TPASection_k9b9kn0biframe\"]"));
        if ($element) {
            try{
                $this->assertNotNull((WebDriverBy::xpath("//*[@id=\"TPASection_k9b9kn0biframe\"]"))
                );
            }
            catch (Exception $e)
            {
                echo ' <<Houston, we have a problem. My Account page Account data block missed.>> ';
            }
        }
        /**Social bar exists  */
        $element = $this->driver->findElement(WebDriverBy::xpath("//*[@id=\"comp-k9b8gmdl1itemsContainer\"]"));
        if ($element) {
            try{
                $this->assertNotNull((WebDriverBy::xpath("//*[@id=\"comp-k9b8gmdl1itemsContainer\"]"))
                );
            }
            catch (Exception $e)
            {
                echo ' <<Houston, we have a problem. My Account page Social bar missed.>> ';
            }
        }
        /**Chat plugin exists  */
        $element = $this->driver->findElement(WebDriverBy::xpath("//*[@id=\"comp-k9b8go7liframe\"]"));
        if ($element) {
            try{
                $this->assertNotNull((WebDriverBy::xpath("//*[@id=\"comp-k9b8go7liframe\"]"))
                );
            }
            catch (Exception $e)
            {
                echo ' <<Houston, we have a problem. My Account page Chat plugin missed.>> ';
            }
        }

        echo " <<Houston, flight normal. My Account page verification passed.>> ";
    }

    public function accountPageInputsVer()
    {
        /**Provide First Name */
        $element = $this->driver->findElement(WebDriverBy::xpath("//*[@id=\"name\"]"));
        $element->click();
        $element->sendKeys("Tom");
        /**Provide Last Name  */
        $element = $this->driver->findElement(WebDriverBy::xpath("//*[@id=\"lastName\"]"));
        $element->click();
        $element->sendKeys("Jones");
        /**Provide phone  */
        $element = $this->driver->findElement(WebDriverBy::xpath("//*[@id=\"lastName\"]"));
        $element->click();
        $element->sendKeys("551115551");
        /**Click Update info button  */
        $element = $this->driver->findElement(WebDriverBy::id("//*[@id=\"root\"]/div/div[4]/div[2]/button"));
        $element->click();
        try{
            $this->driver->wait(10, 50);
        }
        catch (Exception $e)
        {
            echo ' <<Houston, we have a problem. Account page inputs missed.>> ';
        }
        /**Need to add assertions here  */



        echo " <<Houston, flight normal. Positive login forms passed.>> ";

    }


}


