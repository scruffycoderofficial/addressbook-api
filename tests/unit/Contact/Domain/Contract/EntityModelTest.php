<?php

use Illuminate\Database\Eloquent\Model;

use CocoaStudio\Component\Contact\Domain\{
    Contract\EntityModel,
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
        $entityModel = $this->getMockBuilder(EntityModel::class)
            ->onlyMethods(['getEntity'])
            ->getMock();

        $entityModel->expects($this->once())
            ->method('getEntity')
            ->willReturnCallback(function(){
                return factory(Contact::class)->make();
            });

        /** @var EntityModel $entityModel */
        self::assertInstanceOf(Model::class, $entityModel->getEntity());
    }
}