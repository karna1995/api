<?php


/**
 * Part of the Antares Project package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Api
 * @version    0.9.0
 * @author     Antares Team
 * @license    BSD License (3-clause)
 * @copyright  (c) 2017, Antares Project
 * @link       http://antaresproject.io
 */




namespace Antares\Api\Contracts;

use Antares\Model\User;
use Antares\Contracts\Html\Form\Fieldset;

interface AuthProviderPresenterContract {

    /**
     * Setup fieldset form.
     *
     * @param Fieldset $fieldset
     * @param User $user
     * @return mixed
     */
    public function fieldset(Fieldset $fieldset, User $user);

}
