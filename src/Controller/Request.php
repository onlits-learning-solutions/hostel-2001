<?php

namespace Hostel\Controller;

use AllowDynamicProperties;

#[AllowDynamicProperties]
class Request
{
    public function __construct(array $request)
    {
        foreach($request as $value) {
            $key = array_keys($request, $value)[0];
            $this->$key = $value;
        }
    }
}