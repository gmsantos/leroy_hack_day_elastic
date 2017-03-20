<?php
namespace Tests\Behavior;

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\RawMinkContext;

/**
 * Base feature context to test behaviors
 */
class RawContext extends RawMinkContext implements
    Context,
    SnippetAcceptingContext
{
}
