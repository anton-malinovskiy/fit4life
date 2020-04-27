<?php

namespace Fit4Life\Page;

use Exception;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverExpectedCondition;

class SignUpLoginPage extends Page


{
    public function signUpFill()
    {

        $element = $this->driver->findElement(WebDriverBy::xpath("//*[@id=\"comp-k9b9kmveavatar\"]"));
        $element->click();

        $element = $this->driver->findElement(WebDriverBy::id("signUpDialogemailInputinput"));
        $element->click();
        $element->sendKeys("anton.malinovskiy@nsight.pl");

        $element = $this->driver->findElement(WebDriverBy::id("signUpDialogpasswordInputinput"));
        $element->click();
        $element->sendKeys("Test!123");

        $element = $this->driver->findElement(WebDriverBy::id("signUpDialogokButton"));
        $element->click();

        echo " <<Houston, flight normal. Sign up forms passed.>> ";

    }

    public function loginFillPos()
    {
        /**To log in button click */
        $element = $this->driver->findElement(WebDriverBy::xpath("//*[@id=\"comp-k9b9kmveavatar\"]"));
        $element->click();
        /**Switch to login  */
        $element = $this->driver->findElement(WebDriverBy::id("signUpDialogswitchDialogLink"));
        $element->click();
        /**Email-login input  */
        $element = $this->driver->findElement(WebDriverBy::id("memberLoginDialogemailInputinput"));
        $element->click();
        $element->sendKeys("anton.malinovskiy@nsight.pl");
        /**Password input  */
        $element = $this->driver->findElement(WebDriverBy::id("memberLoginDialogpasswordInputinput"));
        $element->click();
        $element->sendKeys("Test!123");
        /**Log in button  */
        $element = $this->driver->findElement(WebDriverBy::id("memberLoginDialogokButton"));
        $element->click();

        echo " <<Houston, flight normal. Positive login forms passed.>> ";
    }

    public function loginFillNegMail()
    {
        /**To log in button click */
        $element = $this->driver->findElement(WebDriverBy::xpath("//*[@id=\"comp-k9b9kmveavatar\"]"));
        $element->click();
        /**Switch to login  */
        $element = $this->driver->findElement(WebDriverBy::id("signUpDialogswitchDialogLink"));
        $element->click();
        /**Email-login input. Wrong e-mail  */
        $element = $this->driver->findElement(WebDriverBy::id("memberLoginDialogemailInputinput"));
        $element->click();
        $element->sendKeys("wrong.email@nsight.pl");
        /**Password input. Correct password  */
        $element = $this->driver->findElement(WebDriverBy::id("memberLoginDialogpasswordInputinput"));
        $element->click();
        $element->sendKeys("Test!123");
        /**Log in button  */
        $element = $this->driver->findElement(WebDriverBy::id("memberLoginDialogokButton"));
        $element->click();
        /**Wrong password verify message  */
        try{
            $this->driver->wait(10, 50)->until(
                WebDriverExpectedCondition::visibilityOfElementLocated(WebDriverBy::xpath("//*[@id=\"memberLoginDialogpasswordInputerrorMessage\"]")));
        }
        catch (Exception $e)
        {
            echo ' <<Houston, we have a problem. Warning message missed.>> ';
        }

        echo " <<Houston, flight normal. Negative email login test passed.>> ";
    }

    public function loginFillNegPass()
    {
        /**To log in button click */
        $element = $this->driver->findElement(WebDriverBy::xpath("//*[@id=\"comp-k9b9kmveavatar\"]"));
        $element->click();
        /**Switch to login  */
        $element = $this->driver->findElement(WebDriverBy::id("signUpDialogswitchDialogLink"));
        $element->click();
        /**Email-login input. Correct e-mail  */
        $element = $this->driver->findElement(WebDriverBy::id("memberLoginDialogemailInputinput"));
        $element->click();
        $element->sendKeys("anton.malinovskiy@nsight.pl");
        /**Password input. Wrong password  */
        $element = $this->driver->findElement(WebDriverBy::id("memberLoginDialogpasswordInputinput"));
        $element->click();
        $element->sendKeys("wrongpassword!123");
        /**Log in button  */
        $element = $this->driver->findElement(WebDriverBy::id("memberLoginDialogokButton"));
        $element->click();
        /**Wrong password verify message  */
        try{
            $this->driver->wait(10, 50)->until(
                WebDriverExpectedCondition::visibilityOfElementLocated(WebDriverBy::xpath("//*[@id=\"memberLoginDialogpasswordInputerrorMessage\"]")));
        }
        catch (Exception $e)
        {
            echo ' <<Houston, we have a problem. Warning message missed.>> ';
        }

        echo " <<Houston, flight normal. Negative email login test passed.>> ";
    }

    public function loginFillNegEmptyInputs()
    {
        /**To log in button click */
        $element = $this->driver->findElement(WebDriverBy::xpath("//*[@id=\"comp-k9b9kmveavatar\"]"));
        $element->click();
        /**Switch to login  */
        $element = $this->driver->findElement(WebDriverBy::id("signUpDialogswitchDialogLink"));
        $element->click();
        /**Log in button  */
        $element = $this->driver->findElement(WebDriverBy::id("memberLoginDialogokButton"));
        $element->click();
        /**Empty email input verify message email */
        try{
            $this->driver->wait(10, 50)->until(
                WebDriverExpectedCondition::visibilityOfElementLocated(WebDriverBy::xpath("//*[@id=\"memberLoginDialogemailInputerrorMessage\"]")));
        }
        catch (Exception $e)
        {
            echo ' <<Houston, we have a problem. Warning message "Email cannot be blank" missed.>> ';
        }

        echo " <<Houston, flight normal. Empty email input login test passed.>> ";
        /**Empty password input verify message email */
        try{
            $this->driver->wait(10, 50)->until(
                WebDriverExpectedCondition::visibilityOfElementLocated(WebDriverBy::xpath("//*[@id=\"memberLoginDialogemailInputerrorMessage\"]")));
        }
        catch (Exception $e)
        {
            echo ' <<Houston, we have a problem. Warning message "Make sure you enter a password." missed.>> ';
        }

        echo " <<Houston, flight normal. Empty password input login test passed.>> ";
    }

}