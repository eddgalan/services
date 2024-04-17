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

    public function test_url()
    {
        $url = Validate::url('https://platzi.com');
        $this->assertTrue($url);
        $url = Validate::url('platzi.com');
        $this->assertFalse($url);
    }

    public function test_password()
    {
        $password = Validate::password('Password1!');
        $this->assertTrue($password);

        $password = Validate::password('12345');
        $this->assertFalse($password);

        $password = Validate::password('12345S');
        $this->assertFalse($password);

        $password = Validate::password('12345S!');
        $this->assertFalse($password);

        $password = Validate::password('########');
        $this->assertFalse($password);
    }

}
