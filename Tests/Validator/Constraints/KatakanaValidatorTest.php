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

use Tarhashi\Bundle\ExtraValidatorBundle\Validator\Constraints\KatakanaValidator;
use Tarhashi\Bundle\ExtraValidatorBundle\Validator\Constraints\Katakana;

class KatakanaValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testValidate()
    {
        $vtor = new KatakanaValidator();
        $cons = new Katakana();
        $this->assertFalse($vtor->isValid('abcAbc', $cons));
        $this->assertFalse($vtor->isValid('あいうえお', $cons));
        $this->assertFalse($vtor->isValid('漢字', $cons));
        $this->assertTrue($vtor->isValid('カタカナ', $cons));
        $this->assertTrue($vtor->isValid('カタカナー', $cons));
        $this->assertFalse($vtor->isValid('カタカナ123', $cons));
        $this->assertFalse($vtor->isValid('カタカナ１２３', $cons));
    }


}
