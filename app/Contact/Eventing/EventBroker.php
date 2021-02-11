<?php

namespace CocoaStudio\Component\Contact\Eventing;

use Illuminate\Events\Dispatcher;
use Illuminate\Database\Eloquent\Model;

use CocoaStudio\Component\Contact\Messaging\MessageSender;
use CocoaStudio\Component\Contact\Service\DomainEventService;

/**
 * Class EventBroker
 *
 * @package CocoaStudio\Component\Contact\Eventing
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
abstract class EventBroker
{
    /**
     * @var array $data
     */
    protected $data = [];

    /**
     * Whether this event has been logged
     *
     * @var bool $isLogged
     */
    private $isLogged = false;

    /**
     * EventBroker constructor.
     */
    public function __construct()
    {
        $timeNow = strtotime('now');

        array_push($this->data,[
            'created_at' => $timeNow,
            'updated_at' => $timeNow
        ]);

        Model::registerModelEvent('contact.saved', function(DomainEventService $domainEventService){
            $response = $domainEventService->createLog(
                EventLogFactory::logData($this->data)
            );

            if ($response['success']) {
                $this->isLogged = true;
            }
        });
    }

    /**
     * Create Event identifier before it is logged
     *
     * @param $subjectFullyQualifiedClassName
     * @return string
     */
    protected function createIdentifier($subjectFullyQualifiedClassName): string
    {
         array_push($this->data, [
             'eventEnvelop' => (function() use($subjectFullyQualifiedClassName) {
                 return json_encode([
                     'targetClass' => $subjectFullyQualifiedClassName,
                     'type' => 'service'
                 ], true);
             })()
         ]);

        return uniqid($subjectFullyQualifiedClassName . '_' . $this->data['created_at']);
    }

    /**
     * Get Event data after it has been logged
     */
    public function getLogEventData(): array
    {
        return $this->data;
    }

    /**
     * Log data for an incoming Event name
     *
     * @param $eventName
     * @param array $data
     */
    public function logEvent($eventName, array $data)
    {
        array_push($this->data, [
            'content' => $data
        ]);

        MessageSender::sendEvent(new Dispatcher(app()), $eventName, $data);
    }
}