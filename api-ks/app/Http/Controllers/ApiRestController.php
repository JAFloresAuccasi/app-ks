<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\customer;
use App\Models\button_settings\button_settings_model;
use App\Models\pop_up_settings\pop_up_settings_model;
use App\Models\text_customizations\text_customizations_model;
use Illuminate\Support\Facades\DB;
class ApiRestController extends Controller
{

    public function funcionPrueba(Request $request)
    {
        /*$data=DB::table('customer')
            ->join('button_settings','customer.id','=','button_settings.customer_id')
            ->join('pop_up_settings','customer.id','=','pop_up_settings.customer_id')
            ->select('customer.shop_url','button_settings.*','pop_up_settings.*')
            ->where('shop_url', '=', $request->shop)
            ->first();*/

        $data = Customer::with('button_settings_model','button_optional_model','pop_up_settings_model','text_customizations_model')
            ->where('shop_url', '=', $request->shop)
            ->first(['id','shop_url']);
        

            /* $data = Customer::with('button_settings_model','pop_up_settings_model')
            ->select('id','shop_url')
            ->where('customer.shop_url', '=', $request->shop)
            ->get(); */


        // $id = customer::all()->where('shop_url', '=', $request->shop)->value('id');
        //$data = button_settings_model::all()->where('customer_id', '=', $id);
        // $data = customer::with('pop_up_settings_model')->where('id', '=', $id)->get()->first();

        //consulta base de datos
        return response()->json([$data]);
        // /* return response()->json(['name' => 'Abigail', 'state' => 'CA']); 
    }
}