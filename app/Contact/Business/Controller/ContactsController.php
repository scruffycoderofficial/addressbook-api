<?php

namespace CocoaStudio\Component\Contact\Business\Controller;

use Illuminate\Contracts\Routing\ResponseFactory;

use CocoaStudio\Component\Contact\Domain\Service\{
    ContactTypesService,
    ContactService
};

/**
 * Class ContactsController
 *
 * @package CocoaStudio\Component\Contact\Business\Controller
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
class ContactsController
{
    /**
     * @var ResponseFactory $responseFactory
     */
    protected $responseFactory;

    /**
     * ContactsController constructor.
     *
     * @param ResponseFactory $responseFactory
     */
    public function __construct(ResponseFactory $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    /**
     * @param ContactService $contactService
     */
    public function indexAction(ContactService $contactService): \Illuminate\Http\JsonResponse
    {
        $responseData = [
            'data' => $contactService->getActiveCollection(),
            'message' => [
                'success' => true,
                'sys_log_id' => uniqid(__NAMESPACE__ . '_' . strtotime('now'))
            ]
        ];

        return $this->responseFactory->json($responseData);
    }

    /**
     * @param ContactTypesService $contactTypesService
     */
    public function typesAction(ContactTypesService $contactTypesService): \Illuminate\Http\JsonResponse
    {
        $responseData = [
            'data' => $contactTypesService->getSupportedTypesCollection(),
            'message' => [
                'success' => true,
                'sys_log_id' => uniqid(__NAMESPACE__ . '_' . strtotime('now'))
            ]
        ];

        return $this->responseFactory->json($responseData);
    }
}