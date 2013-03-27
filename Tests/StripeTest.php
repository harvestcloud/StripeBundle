<?php

/*
 * This file is part of the Harvest Cloud package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HarvestCloud\Stripe\Tests;

use HarvestCloud\StripeBundle\Stripe;

/**
 * Tests for Stripe
 *
 * @author  Tom Haskins-Vaughan <tom@harvestcloud.com>
 * @since   2013-03-26
 */
class StripeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * testConstructor()
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
     * @since  2013-03-26
     */
    public function testConstructor()
    {
        $stripe = new Stripe('tom', 'nick');

        $this->assertEquals($stripe->getSecretKey(), 'tom');
    }

    /**
     * testGetSecretKey()
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
     * @since  2013-03-26
     */
    public function testGetSecretKey()
    {
        $stripe = new Stripe('tom', 'nick');

        $this->assertEquals($stripe->getSecretKey(), 'tom');
    }

    /**
     * testGetPublishableKey()
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
     * @since  2013-03-26
     */
    public function testGetPublishableKey()
    {
        $stripe = new Stripe('tom', 'nick');

        $this->assertEquals($stripe->getPublishableKey(), 'nick');
    }
}
