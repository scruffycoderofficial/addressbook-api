<?php

namespace CocoaStudio\Component\Contact\Types\Support;

/**
 * Interface TypeDefinition
 *
 * @package CocoaStudio\Component\Contact\Types\Support
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
interface TypeDefinition
{
    public function getLabel();

    public function getValue();

    public function getDescription();

    public function getValueOverride();

    public function isPublic();
}