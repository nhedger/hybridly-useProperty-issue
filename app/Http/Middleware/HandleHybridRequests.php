<?php

namespace App\Http\Middleware;

use App\Data\GlobalProperties;
use App\Data\UserData;
use Hybridly\Http\Middleware;
use Illuminate\Http\Request;

class HandleHybridRequests extends Middleware
{
    /**
     * Defines the properties that are shared to all requests.
     */
    public function share(Request $request): GlobalProperties
    {
        return GlobalProperties::from([
            'security' => [
                'user' => UserData::optional(null),
            ]
        ]);
    }
}
