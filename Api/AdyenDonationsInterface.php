<?php
/**
 *
 * Adyen Payment Module
 *
 * Copyright (c) 2023 Adyen N.V.
 * This file is open source and available under the MIT license.
 * See the LICENSE file for more info.
 *
 * Author: Adyen <magento@adyen.com>
 */

namespace Adyen\Payment\Api;

interface AdyenDonationsInterface
{
    /**
     * Build and send donation payment request
     *
     * @param string $payload
     * @return void
     */
    public function donate(string $payload): void;
}
