<?php

namespace Melk\MJRBoxSelectBundle\Contributions;

use Sli\ExpanderBundle\Ext\ContributorInterface;

/**
 * This contribution will only be used if ModeraBackendOnSteroidsBundle bundle is installed.
 *
 * @author    Sergei Lissovski <sergei.lissovski@modera.org>
 * @copyright 2015 Modera Foundation
 */
class SteroidClassMappingsProvider implements ContributorInterface
{
    /**
     * {@inheritdoc}
     */
    public function getItems()
    {
        return array(
            '@MelkMJRBoxSelectBundle/Resources/public/js/',
        );
    }
}
