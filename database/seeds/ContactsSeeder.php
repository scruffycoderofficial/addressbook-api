<?php

use Illuminate\Database\Seeder;
use CocoaStudio\Component\Contact\Domain\Entity\Contact;

/**
 * Class ContactsSeeder
 */
class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Contact::class)->create();
    }
}
