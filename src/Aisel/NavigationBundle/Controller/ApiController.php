<?php

/*
 * This file is part of the Aisel package.
 *
 * (c) Ivan Proskuryakov
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Aisel\NavigationBundle\Controller;

use Aisel\ResourceBundle\Controller\ApiController as BaseApiController;

/**
 * ApiController
 *
 * @author Ivan Proskoryakov <volgodark@gmail.com>
 */
class ApiController extends BaseApiController
{

    /**
     * @var string
     */
    protected $model = "Aisel\NavigationBundle\Entity\Menu";

}
