<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) TAKAHASHI Masaki <tarhashi@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace Tarhashi\Bundle\ExtraValidatorBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class Hiragana extends Constraint
{
    public $invalidMessage = 'ひらがなのみ入力可能です。';
}
