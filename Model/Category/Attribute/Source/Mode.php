<?php

namespace FireGento\FlexCms\Model\Category\Attribute\Source;

class Mode extends \Magento\Catalog\Model\Category\Attribute\Source\Mode
{
    const DM_EXTERNAL_URL = 'EXTERNAL_URL';
    
    /**
     * {@inheritdoc}
     * @codeCoverageIgnore
     */
    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = array_merge( parent::getAllOptions(), [
                ['value' => self::DM_EXTERNAL_URL, 'label' => __('External URL')],
            ]);
        }
        return $this->_options;
    }
}