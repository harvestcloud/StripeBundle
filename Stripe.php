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
 * @since  2013-03-26
 */
class Stripe
{
    /**
     * secret_key
     *
     * @var string
     */
    protected $secret_key;

    /**
     * publishable_key
     *
     * @var string
     */
    protected $publishable_key;

    /**
     * __construct
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
     * @since  2013-03-26
     *
     * @param  string $secret_key
     * @param  string $publishable_key
     */
    public function __construct($secret_key, $publishable_key)
    {
        $this->secret_key      = $secret_key;
        $this->publishable_key = $publishable_key;

        \Stripe::setApiKey($this->secret_key);
    }

    /**
     * getSecretKey()
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
     * @since  2013-03-26
     *
     * @return string
     */
    public function getSecretKey()
    {
        return $this->secret_key;
    }

    /**
     * getPublishableKey()
     *
     * @author Tom Haskins-Vaughan <tom@harvestcloud.com>
     * @since  2013-03-26
     *
     * @return string
     */
    public function getPublishableKey()
    {
        return $this->publishable_key;
    }
}
