<?php

/**
 * Class ContactsControllerTest
 *
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
class ContactsControllerTest extends TestCase
{
    /** 
     * @test 
     * @smoke
     */
    public function it_has_a_list_of_active_contacts()
    {
        $this->get('v1/api/contacts');

        $this->seeJsonStructure(
            [ 
                'data' => [ 
                    [
                        'id', 
                        'first_name', 
                        'last_name', 
                        'mobile_number', 
                        'email_address'
                    ]
                ],
                'success'
            ]
        );
    }
}