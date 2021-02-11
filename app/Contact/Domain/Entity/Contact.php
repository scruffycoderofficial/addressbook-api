<?php

namespace CocoaStudio\Component\Contact\Domain\Entity;

use Illuminate\Database\Eloquent\{ SoftDeletes, Model };

/**
 * Class Contact
 *
 * @package CocoaStudio\Component\Contact\Domain\Entity
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
class Contact extends Model
{
    /**
     * Soft delete Contact records
     */
    use SoftDeletes;

    /**
     * Unguarded Contact fields
    */
    protected $fillables = [
        'first_name', 'last_name', 'mobile_number', 'email_address'
    ];

    /** {@inheritDoc} */
    protected $dates = [ 'deleted_at' ];
}
