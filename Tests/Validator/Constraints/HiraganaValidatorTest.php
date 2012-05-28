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

use Tarhashi\Bundle\ExtraValidatorBundle\Validator\Constraints\HiraganaValidator;
use Tarhashi\Bundle\ExtraValidatorBundle\Validator\Constraints\Hiragana;

class HiraganaValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testValidate()
    {
        $vtor = new HiraganaValidator();
        $cons = new Hiragana();
        $this->assertFalse($vtor->isValid('abcAbc', $cons));
        $this->assertTrue($vtor->isValid('あいうえお', $cons));
        $this->assertTrue($vtor->isValid('あいうえおー', $cons));
        $this->assertFalse($vtor->isValid('あいうえお12', $cons));
        $this->assertFalse($vtor->isValid('あいうえおabc', $cons));
        $this->assertFalse($vtor->isValid('漢字', $cons));
        $this->assertFalse($vtor->isValid('カタカナ', $cons));
    }


}
