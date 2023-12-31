<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerExample\Yves\ClickAndCollectPageExample;

use Spryker\Yves\Kernel\AbstractFactory;
use SprykerExample\Yves\ClickAndCollectPageExample\Form\ClickAndCollectServiceTypeSubForm;
use Symfony\Component\Form\FormTypeInterface;

class ClickAndCollectPageExampleFactory extends AbstractFactory
{
    /**
     * @return \Symfony\Component\Form\FormTypeInterface
     */
    public function createClickAndCollectServiceTypeSubForm(): FormTypeInterface
    {
        return new ClickAndCollectServiceTypeSubForm();
    }
}
