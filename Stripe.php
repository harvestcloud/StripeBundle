<?php

/*
 * This file is part of the Harvest Cloud package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HarvestCloud\StripeBundle;

/**
 * Stripe
 *
 * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
 * @scein  2013-03-26
 */
class Stripe
{
    /**
     * __construct
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
     * @since  2013-03-26
     */
    public function __construct($secret_key)
    {
        \Stripe::setApiKey($secret_key);
    }
}
