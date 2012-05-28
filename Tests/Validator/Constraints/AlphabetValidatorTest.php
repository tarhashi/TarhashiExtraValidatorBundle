<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) TAKAHASHI Masaki <tarhashi@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


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
