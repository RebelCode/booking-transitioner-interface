<?php

namespace RebelCode\Bookings;

use Dhii\Util\String\StringableInterface as Stringable;
use RebelCode\Bookings\Exception\CouldNotTransitionExceptionInterface;
use RebelCode\Bookings\Exception\TransitionerExceptionInterface;

/**
 * Something that can apply transitions to bookings.
 *
 * In the context of bookings, a transition signifies an update of status and other potential data.
 *
 * @since [*next-version*]
 */
interface TransitionerInterface
{
    /**
     * Applies a transition to a booking.
     *
     * @since [*next-version*]
     *
     * @param BookingInterface       $booking    The booking to transition.
     * @param string|Stringable|null $transition The transition to apply.
     *
     * @return BookingInterface The transitioned booking. May not be the same instance.
     *
     * @throws TransitionerExceptionInterface If the transitioner encountered a problem.
     * @throws CouldNotTransitionExceptionInterface If the transition could not be applied to the booking.
     */
    public function transition(BookingInterface $booking, $transition);
}
