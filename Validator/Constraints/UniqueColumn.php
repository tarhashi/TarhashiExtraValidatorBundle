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
class UniqueColumn extends Constraint
{
    public $invalidMessage = '既に使用されています。';
    public $entity = null;
    public $column = null;

    public function validatedBy()
    {
        return 'uniquecolumn_validator';
    }
}
