<?php

namespace CocoaStudio\Component\Contact\Domain\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use CocoaStudio\Component\Contact\Domain\Contract\EntityModel;

/**
 * Class Contact
 */
class Contact extends Model implements EntityModel
{
    use SoftDeletes;

    /** {@inheritdoc} */
    protected $fillables = [
        'first_name', 'last_name', 'mobile_number', 'email_address'
    ];

    /**
     * Soft Delete feature
     * 
     * @var $dates
     */
    protected $dates = [ 'deleted_at' ];
}
