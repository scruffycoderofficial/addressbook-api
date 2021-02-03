<?php

namespace CocoaStudio\Component\Contact\Business\Controller;

use Illuminate\Http\JsonResponse;
use CocoaStudio\Component\Contact\Business\Service\ContactsService;

/**
 * Class ContactsController
 */
class ContactsController
{
    /**
     * @param ContactService $contactsService
     */
    public function indexAction(ContactsService $contactsService)
    {
        return new JsonResponse([ 'data' => $contactsService->getAll() ], 200);
    }
}