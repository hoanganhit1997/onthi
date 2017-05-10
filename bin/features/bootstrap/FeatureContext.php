<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;
/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }
	
    /**
     * @Given I on the home_page
     */
    public function iOnTheHomePage()
    {
        throw new PendingException();
    }

    /**
     * @When I press the :arg1 button
     */
    public function iPressTheButton($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I see the exam_page
     */
    public function iSeeTheExamPage()
    {
        throw new PendingException();
    }

    /**
     * @Given I on the exam_page
     */
    public function iOnTheExamPage()
    {
        throw new PendingException();
    }

    /**
     * @When I check on first checkbox
     */
    public function iCheckOnFirstCheckbox()
    {
        throw new PendingException();
    }

    /**
     * @Then I see first checkbox was checked
     */
    public function iSeeFirstCheckboxWasChecked()
    {
        throw new PendingException();
    }

    /**
     * @When I press on the :arg1 button
     */
    public function iPressOnTheButton($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I see the result_page
     */
    public function iSeeTheResultPage()
    {
        throw new PendingException();
    }

    /**
     * @Given I on the learn_page
     */
    public function iOnTheLearnPage()
    {
        throw new PendingException();
    }

    /**
     * @When I go to the home_page
     */
    public function iGoToTheHomePage()
    {
        throw new PendingException();
    }

    /**
     * @Then I see the home_page
     */
    public function iSeeTheHomePage()
    {
        throw new PendingException();
    }

    /**
     * @Then I see the learn question_page
     */
    public function iSeeTheLearnQuestionPage()
    {
        throw new PendingException();
    }

    /**
     * @Then I see question :arg1
     */
    public function iSeeQuestion($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I see the first checkbox was checked
     */
    public function iSeeTheFirstCheckboxWasChecked()
    {
        throw new PendingException();
    }

    /**
     * @Then I see the tips_page
     */
    public function iSeeTheTipsPage()
    {
        throw new PendingException();
    }

    /**
     * @Then I see the traffic_signs_page
     */
    public function iSeeTheTrafficSignsPage()
    {
        throw new PendingException();
    }
}
