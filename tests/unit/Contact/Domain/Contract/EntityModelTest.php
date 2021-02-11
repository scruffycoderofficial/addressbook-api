<?php

use Illuminate\Database\Eloquent\Model;

use CocoaStudio\Component\Contact\Domain\{
    Contract\ContactEntityModel,
    Entity\Contact
};

/**
 * Class EntityModelTest
 *
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
class EntityModelTest extends TestCase
{
    /**
     * @test
     */
    public function it_has_contact_entity_model()
    {
        $entityModel = $this->getMockBuilder(ContactEntityModel::class)
            ->onlyMethods(['getEntity'])
            ->getMock();

        $entityModel->expects($this->once())
            ->method('getEntity')
            ->willReturnCallback(function(){
                return factory(Contact::class)->make();
            });

        /** @var ContactEntityModel $entityModel */
        self::assertInstanceOf(Model::class, $entityModel->getEntity());
    }
}