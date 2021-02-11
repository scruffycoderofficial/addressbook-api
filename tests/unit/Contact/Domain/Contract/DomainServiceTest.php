<?php

use CocoaStudio\Component\Contact\Domain\{
    Contract\ContactService,
    Entity\Contact
};

/**
 * Class DomainServiceTest
 *
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
class DomainServiceTest extends TestCase
{
    /**
     * @test
     */
    public function it_has_active_contacts()
    {
        $domainService = $this->getMockBuilder(ContactService::class)
            ->onlyMethods(['getAllActive'])
            ->getMock();

        $domainService->expects($this->once())
            ->method('getAllActive')
            ->willReturnCallback(function(){
                return factory(Contact::class, 1)->make();
            });

        $domainService->getAllActive()->map(function($item){ self::assertNull($item->deleted_at); });
    }
}