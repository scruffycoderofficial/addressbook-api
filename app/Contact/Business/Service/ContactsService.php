<?php

namespace CocoaStudio\Component\Contact\Business\Service;

/**
 * Class ContactsService
 */
class ContactsService
{
    /**
     * Get all Contacts based on given conditions, if any
     */
    public function getAll(array $conditions = [])
    {
        \Log::info("Do we get here?");
        return \DB::table('contacts')
            ->where($conditions)
            ->whereNull('deleted_at')
            ->select()
            ->get();
    }
}