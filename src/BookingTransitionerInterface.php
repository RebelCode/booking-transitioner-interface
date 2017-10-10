<?php

namespace RebelCode\Bookings;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that can apply transitions to bookings.
 *
 * In the context of bookings, a transition signifies an update of status and other potential data.
 *
 * @since [*next-version*]
 */
interface BookingTransitionerInterface
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
     */
    public function transition(BookingInterface $booking, $transition);
}
