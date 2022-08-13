<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\AioSalesChannel\Block\Adminhtml;

use Magento\Framework\View\Element\Template;

class Index extends Template
{
    public function getIframeUrl(): string
    {
        return 'https://localhost:9080/';
    }

    public function getIframeWidth(): string
    {
        return '100%';
    }

    public function getIframeHeight(): string
    {
        return '1000px';
    }
}
