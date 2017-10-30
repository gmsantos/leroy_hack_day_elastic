<?php
namespace Tests\Behavior;

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Base feature context to test behaviors simulating web browser
 */
class UIContext extends MinkContext implements
    Context,
    SnippetAcceptingContext
{
}
