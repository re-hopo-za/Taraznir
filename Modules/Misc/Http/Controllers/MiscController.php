<?php

namespace Modules\Misc\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Misc\Models\Option;

class MiscController extends Controller
{

    public function index( Request $request)
    {
        if( $request->key ){
            return response(
                Option::with('meta')->where('key' ,$request->key )->get()
            );
        }

        return response(
            []
        );
    }

}
