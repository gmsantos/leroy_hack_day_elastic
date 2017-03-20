<?php
namespace Tests\Behavior;

use BadMethodCallException;
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
    public function __call(string $method, array $args = [])
    {
        $session = $this->getSession();
        $assertSession = $this->assertSession();

        if (method_exists($session, $method)) {
            return call_user_func_array([$session, $method], $args);
        }

        if (method_exists($assertSession, $method)) {
            return call_user_func_array([$assertSession, $method], $args);
        }

        throw new BadMethodCallException(
            sprintf(
                'Method "%s" doesn\'t exist in following classes: %s',
                $method,
                implode(', ', [
                    __CLASS__,
                    get_class($session),
                    get_class($assertSession),
                ])
            )
        );
    }

    /**
     * Returns fixed step argument (with \\" replaced back to ")
     *
     * @param string $argument
     *
     * @return string
     */
    protected function fixStepArgument($argument)
    {
        return str_replace('\\"', '"', $argument);
    }
}
