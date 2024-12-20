<?php

namespace Payfast\Payfast\Block;

use Magento\Framework\Phrase;
use Magento\Payment\Block\ConfigurableInfo;

/**
 * Info class
 */
class Info extends ConfigurableInfo
{
    /**
     * Returns label
     *
     * @param string $field
     *
     * @return Phrase
     */
    protected function getLabel($field): Phrase
    {
        parent::getLabel($field);

        return __($field);
    }
}
