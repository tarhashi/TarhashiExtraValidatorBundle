<?php

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
