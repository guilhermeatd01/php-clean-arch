<?php

use PHPUnit\Framework\MockObject\MockObject;

require __DIR__ . '/../../test2.php';

class testeTest extends \PHPUnit\Framework\TestCase
{
    public function testWithInvalidBar() {
        /** @var B|MockObject */
        $bStub = $this->createMock(B::class);
        $bStub->method('bar')->willReturn('foo');
        $a = new A($bStub);
        
        $this->assertFalse($a->foo());
    }

    public function testIfFooCallsTheBar()
    {
        /** @var B|MockObject  */
        $bMock = $this->getMockBuilder(B::class)
            ->onlyMethods(['bar'])
            ->getMock();

        $bMock->expects($this->once())->method('bar')->willReturn('foo');

        $a = new A($bMock);
        $a->foo();
    }

    public function testWithValidBar() {
        /** @var B|MockObject  */
        $bStub = $this->createMock(B::class);
        $bStub->method('bar')->willReturn('bar');
        $a = new A($bStub);
        
        $this->assertTrue($a->foo());
    }
}
