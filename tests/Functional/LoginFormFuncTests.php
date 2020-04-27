<?php

namespace Tests\Functional;

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Fit4Life\Page\SignUpLoginPage;
use Fit4Life\Page\StartPage;
use Tests\AbstractTest;

class LoginFormFuncTests extends AbstractTest
{

    public function testSignUp()
    {
        /**Test case positive. Sign up with email. */

        $startPage = new StartPage($this->driver);
        $startPage->open();

        $signUpPage = new SignUpLoginPage($this->driver);
        $signUpPage->signUpFill();

        $dropDownMenuStartPage = new StartPage($this->driver);
        $dropDownMenuStartPage->dropdownMenuAccount();

    }

    public function testLogInPos()
    {
        /**Test case positive. Login with email. */

        $startPage = new StartPage($this->driver);
        $startPage->open();

        $signUpPage = new SignUpLoginPage($this->driver);
        $signUpPage->loginFillPos();

        $dropDownMenuStartPage = new StartPage($this->driver);
        $dropDownMenuStartPage->dropdownMenuAccount();

        $dropDownMenuStartPage = new StartPage($this->driver);
        $dropDownMenuStartPage->close();
    }

    public function testLogInNegMail()
    {
        /**Test case negative. Login with email. */
        /**Wrong email. */
        $startPage = new StartPage($this->driver);
        $startPage->open();

        $signUpPage = new SignUpLoginPage($this->driver);
        $signUpPage->loginFillNegMail();

        $signUpPage = new StartPage($this->driver);
        $signUpPage->close();
    }

    public function testLogInNegPass()
    {
        /**Test case negative. Login with email. */
        /**Wrong password. */
        $startPage = new StartPage($this->driver);
        $startPage->open();

        $signUpPage = new SignUpLoginPage($this->driver);
        $signUpPage->loginFillNegPass();

        $signUpPage = new StartPage($this->driver);
        $signUpPage->close();
    }

    public function testLogInEmptyInputs()
    {
        /**Test case negative. Empty inputs submit. */
        $startPage = new StartPage($this->driver);
        $startPage->open();

        $signUpPage = new SignUpLoginPage($this->driver);
        $signUpPage->loginFillNegEmptyInputs();

        $signUpPage = new StartPage($this->driver);
        $signUpPage->close();
    }

}
