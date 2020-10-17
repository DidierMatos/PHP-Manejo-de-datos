<?php
    
    use PHPUnit\Framework\TestCase;
    use App\Validate;

    class ValidateTest extends TestCase {
        public function test_email()
        {
            $email = Validate::email('didieryt77@gmail.com');
            $this->assertTrue($email);

            $email = Validate::email('didieryt77@@gmail.com');
            $this->assertFalse($email);
        }
    }
?>