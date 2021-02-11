<?php

use Illuminate\Database\Eloquent\Model;

use CocoaStudio\Component\Contact\{
    Domain\Repository\ContactEntityRepository,
    Domain\Entity\Contact
};

/**
 * Class ContactRepositoryTest
 *
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
class ContactRepositoryTest extends TestCase
{
    protected $contactRepository;

    public function setUp(): void
    {
        parent::setUp();

        $this->contactRepository = new ContactEntityRepository(factory(Contact::class)->make());
    }

    /**
     * @test
     */
    public function it_has_a_contact_entity()
    {
        self::assertInstanceOf(Model::class, $this->contactRepository->getEntity());
    }
}