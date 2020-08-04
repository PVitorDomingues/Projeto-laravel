<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $data = $request->all();


        if ($data['username']=='admin' && $data['password']=='admin'){
            return redirect('orders');
        }else  {
            return redirect('');
        }
    }
}
