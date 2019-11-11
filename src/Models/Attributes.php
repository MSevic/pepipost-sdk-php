<?php
/*
 * PepipostAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PepipostAPILib\Models;

use PepipostAPILib\APIHelper;

/**
 * @todo Write general description for this model
 */
class Attributes
{
    /**
     * Constructor to set initial or default values of member properties
     * @param string Initialization of parameter values for attributes object
     */
    public function __construct()
    {
        if (func_num_args() > 0) {
            $attributes = APIHelper::deserialize(func_get_arg(0));
            foreach ($attributes as $key => $value) {
                $this->$key = $value;
            }
        }
    }
}
