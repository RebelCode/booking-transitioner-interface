<?php

namespace RebelCode\Bookings\Exception;

use Dhii\Exception\ThrowableInterface;
use RebelCode\Bookings\TransitionerAwareInterface;

/**
 * An exception thrown in relation to a booking transitioner.
 *
 * @since [*next-version*]
 */
interface TransitionerExceptionInterface extends
    TransitionerAwareInterface,
    ThrowableInterface
{
}
