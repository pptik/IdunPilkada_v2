<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class CPilkada extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function getdatapilkada($id_daerah)
    {
        $client = new GuzzleHttp\Client();
        $res = $client->get('https://api.github.com/user', ['auth' =>  ['user', 'pass']]);
        echo $res->getStatusCode(); // 200
        echo $res->getBody(); // { "type": "User", ....
    }
}
