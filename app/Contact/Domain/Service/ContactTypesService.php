<?php

namespace CocoaStudio\Component\Contact\Domain\Service;

use Illuminate\Support\Collection;

use CocoaStudio\Component\Contact\Types\Support\ContactTypes;

/**
 * Class ContactTypesService
 *
 * @package CocoaStudio\Component\Contact\Domain\Service
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
final class ContactTypesService
{
    /**
     * @return Collection
     */
    public function getSupportedTypesCollection(): Collection
    {
        return new Collection(array_map(function($typeDefinition){

            array_pop($typeDefinition);

            $targetClass = $typeDefinition['target'];

            $concreteDefinition = null;
            if (class_exists($targetClass)) {
                $concreteDefinition = new $targetClass();
            }
            return $concreteDefinition;

        }, ContactTypes::TYPE_DEFINITIONS));
    }
}