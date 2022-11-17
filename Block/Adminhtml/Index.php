<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\AioAmazonSalesChannel\Block\Adminhtml;

use Magento\Framework\View\Element\Template;

class Index extends Template
{
    private const CONFIG_PATH = 'amazon_sales_channel/integration/url';

    /**
     * @return string
     */
    public function getIframeUrl(): ?string
    {
        return $this->_scopeConfig->getValue(self::CONFIG_PATH);
    }

    /**
     * @return string
     */
    public function getIframeWidth(): string
    {
        return '100%';
    }

    /**
     * @return string
     */
    public function getIframeHeight(): string
    {
        return '1000px';
    }
}
