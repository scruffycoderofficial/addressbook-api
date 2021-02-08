<?php

namespace CocoaStudio\Component\Contact\Domain\Entity;

use Illuminate\Database\Eloquent\{ SoftDeletes, Model };

/**
 * Class Contact
 */
class Contact extends Model
{
    /**
     * Soft delete Contact records
     */
    use SoftDeletes;

    /** {@inheritdoc} */
    protected $fillables = [
        'first_name', 'last_name', 'mobile_number', 'email_address'
    ];

    /** {@inheritdoc} */
    protected $dates = [ 'deleted_at' ];
}
