<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function test_email()
    {
        $email = Validate::email('correo@dominio.com');
        $this->assertTrue($email);
        $email = Validate::email('corre@@dominio');
        $this->assertFalse($email);
    }
}

