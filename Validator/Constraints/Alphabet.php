<?php

namespace Tarhashi\Bundle\ExtraValidatorBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class Alphabet extends Constraint
{
    public $invalidMessage = 'アルファベットのみ入力可能です。';
}
