<?php

namespace Tarhashi\Bundle\ExtraValidatorBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class Hiragana extends Constraint
{
    public $invalidMessage = 'ひらがなのみ入力可能です。';
}
