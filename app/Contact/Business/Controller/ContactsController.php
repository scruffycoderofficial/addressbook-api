<?php

namespace CocoaStudio\Component\Contact\Business\Controller;

use Illuminate\Http\JsonResponse;

use CocoaStudio\Component\Contact\Domain\Service\ContactsService;

/**
 * Class ContactsController
 *
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
class ContactsController
{
    /**
     * @param ContactsService $contactsService
     */
    public function indexAction(ContactsService $contactsService)
    {
        return new JsonResponse([
            'data' => $contactsService->getAllActive(),
            'success' => true ],
            200
        );
    }
}