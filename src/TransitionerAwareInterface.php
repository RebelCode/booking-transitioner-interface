<?php

namespace RebelCode\Bookings;

/**
 * Something that is aware of, and can provide, a booking transitioner.
 *
 * @since [*next-version*]
 */
interface TransitionerAwareInterface
{
    /**
     * Retrieves the booking transitioner associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return TransitionerInterface|null The booking transitioner instance, if any.
     */
    public function getTransitioner();
}
