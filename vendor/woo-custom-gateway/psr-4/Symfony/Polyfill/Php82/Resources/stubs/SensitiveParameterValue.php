<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (\PHP_VERSION_ID < 80200) {
    final class SensitiveParameterValue extends RichardMuvirimi\WooCustomGateway\Vendor\Symfony\Polyfill\Php82\SensitiveParameterValue
    {
    }
}