<?php
/**
 * Phanbook : Delightfully simple forum software
 *
 * Licensed under The GNU License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @link    http://phanbook.com Phanbook Project
 * @since   1.0.0
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt
 */
namespace Phanbook\Common\Library\Providers;

use Phanbook\Common\Library\Annotations\Adapter\Memory;

/**
 * \Phanbook\Common\Library\Providers\AnnotationsServiceProvider
 *
 * @package Phanbook\Common\Library\Providers
 */
class AnnotationsServiceProvider extends AbstractServiceProvider
{
    /**
     * The Service name.
     * @var string
     */
    protected $serviceName = 'annotations';

    /**
     * {@inheritdoc}
     *
     * @return void
     */
    public function register()
    {
        $this->di->setShared($this->serviceName, Memory::class);
    }
}
