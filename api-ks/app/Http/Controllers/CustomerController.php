<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\customer;
use App\Models\button_settings\button_settings_model;
use App\Models\pop_up_settings\pop_up_settings_model;
use App\Models\text_customizations\text_customizations_model;
use App\Models\button_optional\button_optional_model;
use App\Models\restriction_country\restriction_countrymodel;

class CustomerController extends Controller
{
    // public function all_customer()
    // {
    //     $customer = Customer::all();
    //     return view('customer.all_customer', compact('customer'));
    // }
    // public function view_customer($id)
    // {
    //     $customer = Customer::all();
    //     return view('customer.view_customer', compact('customer'));
    //     // return view('customer.all_customer', compact('customer'));
    // }

    public function create()
    {
        return view('customer.create');
    }

    public function save(Request $request)
    {
        $customer = new customer();
        $customer->shop_url = $request->shop_url;
        $customer->save();

        $text_customizations = new text_customizations_model();
        $text_customizations->heading_text = 'Welcome!';
        $text_customizations->disabled_enabled_text = '1';
        $text_customizations->heading_text_weight = 'Bold';
        $text_customizations->heading_fonts = 'Abel';
        $text_customizations->heading_text_size = '26';
        $text_customizations->heading_mobile_text_size = '18';
        $text_customizations->heading_text_color = 'rgb(153 153 153)';
        $text_customizations->sub_heading_text = 'Pleasee verify that you are 18 years of age';
        $text_customizations->disabled_enabled_sub_text = '1';
        $text_customizations->sub_heading_text_weight = 'Regular';
        $text_customizations->sub_heading_fonts = 'Abel';
        $text_customizations->sub_heading_text_size = '14';
        $text_customizations->sub_heading_mobile_text_size = '14';
        $text_customizations->sub_heading_text_color = 'rgb(153 153 153)';
        $text_customizations->customer_id = $customer->id;
        $text_customizations->save();

        $button_settings = new button_settings_model();
        $button_settings->button_1_text = 'Agree';
        $button_settings->button_1_border_radius = '5';
        $button_settings->button_1_border_width = '1';
        $button_settings->button_1_text_color = 'rgb(255 255 255)';
        $button_settings->button_1_background_color = 'rgb(0 0 0)';
        $button_settings->button_1_border_color = 'rgb(0 0 0)';
        $button_settings->button_2_text = 'Disagree';
        $button_settings->button_2_border_radius = '5';
        $button_settings->button_2_border_width = '1';
        $button_settings->button_2_text_color = 'rgb(153 153 153)';
        $button_settings->button_2_background_color = 'rgb(255 255 255)';
        $button_settings->button_2_border_color = 'rgb(153 153 153)';
        $button_settings->Redirect_URL = 'https://www.google.com/';
        $button_settings->disabled_enabled_buttons = '1';
        $button_settings->customer_id = $customer->id;
        $button_settings->save();
        
        $button_optional = new button_optional_model();
        $button_optional->button_border_radius = '5';
        $button_optional->button_border_width = '1';
        $button_optional->button_text_color = 'rgb(255 255 255)';
        $button_optional->button_background_color = 'rgb(0 0 0)';
        $button_optional->button_border_color = 'rgb(0 0 0)';
        $button_optional->text_button = 'Enter';
        $button_optional->enter_button_border_radius = '5';
        $button_optional->enter_button_border_width = '1';
        $button_optional->enter_button_text_color = 'rgb(153 153 153)';
        $button_optional->enter_button_background_color = 'rgb(255 255 255)';
        $button_optional->enter_button_border_color = 'rgb(153 153 153)';
        $button_optional->disabled_enabled_optional = '1';
        $button_optional->customer_id = $customer->id;
        $button_optional->save();
        
        $pop_up_settings = new pop_up_settings_model();
        $pop_up_settings->restriction_message = 'Agree';
        $pop_up_settings->cookie_lifetime_in_days = 'test';
        $pop_up_settings->width = '10';
        $pop_up_settings->border_radius = '10';
        $pop_up_settings->background_color = 'rgb(153 153 153)';
        $pop_up_settings->border_width = '5';
        $pop_up_settings->border_color = 'rgb(153 153 153)';
        $pop_up_settings->top_and_bottom_padding = '5';
        $pop_up_settings->left_and_right_padding = '5';
        $pop_up_settings->upload_visual = '';
        $pop_up_settings->disabled_enabled_visual = '1';
        $pop_up_settings->upload_banner = '';
        $pop_up_settings->disabled_enabled_banner = '1';
        $pop_up_settings->banner_background_color = 'rgb(153 153 153)';
        $pop_up_settings->banner_background_color_opacity = 'rgb(153 153 153)';
        $pop_up_settings->customer_id = $customer->id;
        $pop_up_settings->save();

        //insert a la tabla restriction_country
        
        return redirect()->route('all_customers');
    }
}