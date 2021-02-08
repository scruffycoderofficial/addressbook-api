<?php

use CocoaStudio\Component\Contact\Domain\Entity\Contact;

/**
 * Class ContactTest
 *
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
class ContactTest extends TestCase
{
    /**
     * @var Contact $contact
     */
    protected $contact;

    /** {@inheritdoc} */
    public function setUp(): void
    {
        parent::setUp();

        $this->contact = factory(Contact::class)->make([
            'first_name' => 'Nicki',
            'last_name' => 'Minaj',
            'mobile_number' => '08000000911',
            'email_address' => 'nicky@example.com'
        ]);
    }

    /**
     * @test
     */
    public function it_can_set_contact_attributes()
    {
        self::assertSame('Nicki', $this->contact->first_name);
        self::assertSame('Minaj', $this->contact->last_name);
        self::assertSame('08000000911', $this->contact->mobile_number);
        self::assertSame('nicky@example.com', $this->contact->email_address);
    }

    /**
     * @test
     */
    public function it_can_alter_attributes_of_a_contact()
    {
        $this->contact->first_name = 'Nikiwe';
        $this->contact->last_name = 'Minjani';

        self::assertSame('Nikiwe', $this->contact->first_name);
        self::assertSame('Minjani', $this->contact->last_name);

        self::assertNotSame('Nicki', $this->contact->first_name);
        self::assertNotSame('Minaj', $this->contact->last_name);
    }

    /**
     * @test
     */
    public function it_can_create_and_remove_contacts()
    {
        $contact = factory(Contact::class)->create();

        $this->seeInDatabase('contacts', [
            'id' => $contact->id,
            'first_name' => $contact->first_name,
            'last_name' => $contact->last_name,
            'mobile_number' => $contact->mobile_number,
            'email_address' => $contact->email_address,
        ]);
        

        $contact->delete();

        $this->seeInDatabase('contacts', [ 
            'id' => $contact->id, 
            'deleted_at' => $contact->deleted_at 
        ]);
    }
}