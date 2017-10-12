<?php

namespace RebelCode\Bookings\Exception\UnitTest;

use Xpmock\TestCase;
use RebelCode\Bookings\Exception\CouldNotTransitionExceptionInterface as TestSubject;

/**
 * Tests {@see TestSubject}.
 *
 * @since [*next-version*]
 */
class CouldNotTransitionExceptionInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\Bookings\Exception\CouldNotTransitionExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return TestSubject
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                     ->getTransitioner()
                     ->getBooking()
                     ->getTransition()
                     ->getMessage()
                     ->getCode()
                     ->getPrevious()
                     ->getFile()
                     ->getLine()
                     ->getTrace()
                     ->getTraceAsString()
                     ->__toString();

        return $mock->new();
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME,
            $subject,
            'A valid instance of the test subject could not be created.'
        );

        $this->assertInstanceOf(
            'RebelCode\Bookings\BookingAwareInterface',
            $subject,
            'Test subject does not implement parent interface.'
        );

        $this->assertInstanceOf(
            'RebelCode\Bookings\Exception\TransitionerExceptionInterface',
            $subject,
            'Test subject does not implement parent interface.'
        );

        $this->assertInstanceOf(
            'Dhii\Exception\ThrowableInterface',
            $subject,
            'Test subject does not implement parent interface.'
        );
    }
}
