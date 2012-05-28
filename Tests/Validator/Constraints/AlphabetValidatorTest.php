<?php

namespace Tarhashi\Bundle\ExtraValidatorBundle\Tests\Validator\Constraints;

use Tarhashi\Bundle\ExtraValidatorBundle\Validator\Constraints\AlphabetValidator;
use Tarhashi\Bundle\ExtraValidatorBundle\Validator\Constraints\Alphabet;

class AlphabetValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testValidate()
    {
        $vtor = new AlphabetValidator();
        $cons = new Alphabet();
        $this->assertTrue($vtor->isValid('abcAbc', $cons));
        $this->assertFalse($vtor->isValid('abcAbc123', $cons));
        $this->assertFalse($vtor->isValid('abcAbc_', $cons));
        $this->assertFalse($vtor->isValid('あいうえお', $cons));
    }


}
