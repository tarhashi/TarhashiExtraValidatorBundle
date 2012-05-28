<?php

namespace Tarhashi\Bundle\ExtraValidatorBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * 登録済みでないか調べるためのValidator
 *
 * @author Takahashi Masaki
 */
class UniqueColumnValidator extends ConstraintValidator
{
    private $em;

    public static function get($em)
    {
        $validator = new UniqueColumnValidator();
        $validator->setEm($em);
        return $validator;
    }

    public function isValid($value, Constraint $constraint)
    {
        if (null === $value || '' === $value) {
            return true;
        }

        if (!is_scalar($value) && !(is_object($value) && method_exists($value, '__toString'))) {
            throw new UnexpectedTypeException($value, 'string');
        }

        if (!$constraint->entity || !$constraint->column) {
            throw new \InvalidArgumentException('エンティティ、カラムを指定する必要があります');
        }
        $entity = $this->em
            ->getRepository($constraint->entity)
            ->findOneBy(array($constraint->column => $value));
        if (empty($entity)) {
            return true;
        }

        $this->setMessage($constraint->invalidMessage);
        return false;
    }

    public function setEm($em)
    {
        $this->em = $em;
    }

}
