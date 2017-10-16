<?php

namespace RebelCode\Bookings\Exception;

use Dhii\Util\String\StringableInterface as Stringable;
use RebelCode\Bookings\BookingAwareInterface;

/**
 * An exception thrown when a booking transitioner fails to transition a booking.
 *
 * @since [*next-version*]
 */
interface CouldNotTransitionExceptionInterface extends
    TransitionerExceptionInterface,
    BookingAwareInterface
{
    /**
     * Retrieves the transition that failed.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable|null The transition, if any.
     */
    public function getTransition();
}
