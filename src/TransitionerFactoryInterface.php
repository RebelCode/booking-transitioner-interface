<?php

namespace RebelCode\Bookings;

use Dhii\Factory\FactoryInterface;

/**
 * Something that can create new booking transitioner instances.
 *
 * @since [*next-version*]
 */
interface TransitionerFactoryInterface extends FactoryInterface
{
    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return TransitionerInterface The created booking transitioner instance.
     */
    public function make($config = null);
}
