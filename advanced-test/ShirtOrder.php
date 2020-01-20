<?php

namespace Befeni\Model;

/**
 * A test Shirt Order model
 */

class ShirtOrder 
{
    
    /**
     * The id of the shirt order
     *
     * @var integer
     */
    public $id;

    /**
     * The id of the customer
     *
     * @var integer
     */
    public $customerId;
     
    /**
     * The id of the fabric
     *
     * @var integer
     */
    public $fabricId;
    
    /**
     * The size of the customer's collar in inches
     *
     * @var integer
     */
    public $collarSize;

    /**
     * The size of the customer's chest in inches
     *
     * @var integer
     */
    public $chestSize;

    /**
     * The size of the customer's waist in inches
     *
     * @var integer
     */
    public $waistSize;

    /**
     * The size of the customer's wrist in inches
     *
     * @var integer
     */
    public $wristSize;

}