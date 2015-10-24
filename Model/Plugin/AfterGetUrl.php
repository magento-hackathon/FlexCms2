<?php
/**
 * Copyright © 2015 FireGento e.V. - All rights reserved.
 * See LICENSE.md bundled with this module for license details.
 */
namespace FireGento\FlexCms\Model\Plugin;

use FireGento\FlexCms\Model\Category\Attribute\Source\Mode;
use Magento\Catalog\Model\Category;

/**
 * Class AfterGetContent
 *
 * @package FireGento\MageSetup\Model\Plugin
 */
class AfterGetUrl
{
    /**
     * Get category url
     *
     * @param \Magento\Catalog\Model\Category $subject
     * @param string $result
     * @return string
     */
    public function afterGetUrl(
        Category $subject,
        $result
    )
    {
        if ($subject->getData('display_mode') == Mode::DM_EXTERNAL_URL) {
            if ($externalUrl = $subject->getData('external_url')) {
                return $externalUrl;
            }
        }
        
        return $result;
    }
}
