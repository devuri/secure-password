<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Urisoft\PasswordGenerator;

/**
 * @internal
 *
 * @coversNothing
 */
class PasswordGeneratorTest extends TestCase
{
    public function test_generate_password(): void
    {
        $password = PasswordGenerator::generatePassword();
        $this->assertEquals(8, \strlen($password));
        $this->assertMatchesRegularExpression('/^[a-zA-Z0-9!@#$%^&*()]+$/', $password);
    }

    public function test_generate_password_without_special_chars(): void
    {
        $password = PasswordGenerator::generatePassword(10, false);
        $this->assertEquals(10, \strlen($password));
        $this->assertMatchesRegularExpression('/^[a-zA-Z0-9]+$/', $password);
    }

    public function test_generate_passcode(): void
    {
        $passcode = PasswordGenerator::generatePasscode();
        $this->assertEquals(6, \strlen($passcode));
        $this->assertMatchesRegularExpression('/^[0-9]+$/', $passcode);
    }
}
