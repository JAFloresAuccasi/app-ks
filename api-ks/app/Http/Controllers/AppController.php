<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ComponentsTraits;

use App\Models\customer;
use App\Models\button_settings\button_settings_model;
use App\Models\button_optional\button_optional_model;
use App\Models\pop_up_settings\pop_up_settings_model;
use App\Models\text_customizations\text_customizations_model;
use App\Models\restriction_country\restriction_country_model;

class AppController extends Controller
{
    use ComponentsTraits;
    
    public function index($id)
    {
        $get_data_customizations = customer::with('text_customizations_model')->where('id', '=', $id)->get()->first();
        $get_data_button_settings = customer::with('button_settings_model')->where('id', '=', $id)->get()->first();
        $get_data_B_optional_settings = customer::with('button_optional_model')->where('id', '=', $id)->get()->first();
        $get_data_pop_up_settings = customer::with('pop_up_settings_model')->where('id', '=', $id)->get()->first();
        $get_data_restriction_country = customer::with('restriction_country_model')->where('id', '=', $id)->get()->first();

        // $single_articles = customer::with('pop_up_settings_model')->where('disabled_enabled_visual',1)->first();
        // dd($single_articles);

        return view('age.test', compact('get_data_customizations', 'get_data_button_settings', 'get_data_B_optional_settings', 'get_data_pop_up_settings','get_data_restriction_country'));
    }

    public function all_customer()
    {
        $customer = Customer::all();
        return view('app_age.all_customer', compact('customer'));
    }

    public function edit_customer($id)
    {
        $get_data_customizations = customer::with('text_customizations_model')->where('id', '=', $id)->get()->first();
        // dd($get_data_customizations);
        $get_data_button_settings = customer::with('button_settings_model')->where('id', '=', $id)->get()->first();
        $get_data_B_optional_settings = customer::with('button_optional_model')->where('id', '=', $id)->get()->first();
        $get_data_pop_up_settings = customer::with('pop_up_settings_model')->where('id', '=', $id)->get()->first();
        $get_data_restriction_country = customer::with('restriction_country_model')->where('id', '=', $id)->get()->first();

        // $d = json_decode($get_data_restriction_country->restriction_country_model->country, true);
        //dd($d);
        //exit;
        $selected_Text_Weight = $this->Text_Weigh_string();
        $selected_Text_font = $this->fonts_string();
        $selected_country_string = $this->country_string();

        return view('app_age.edit_customer', compact('get_data_customizations', 'get_data_button_settings', 'get_data_B_optional_settings', 'get_data_pop_up_settings', 'selected_Text_Weight', 'selected_Text_font', 'selected_country_string','get_data_restriction_country'));
    }
    public function update_customer_age(Request $request, $id)
    {
        
        text_customizations_model::where('customer_id', '=', $id)
            ->update([
                'heading_text' => $request->heading_text,
                'disabled_enabled_text' => $request->disabled_enabled_text,
                'heading_text_weight' => $request->heading_text_weight,
                'heading_fonts' => $request->heading_fonts,
                'heading_text_size' => $request->heading_text_size,
                'heading_mobile_text_size' => $request->heading_mobile_text_size,
                'heading_text_color' => $request->heading_text_color,
                'sub_heading_text' => $request->sub_heading_text,
                'disabled_enabled_sub_text' => $request->disabled_enabled_sub_text,
                'sub_heading_text_weight' => $request->sub_heading_text_weight,
                'sub_heading_fonts' => $request->sub_heading_fonts,
                'sub_heading_text_size' => $request->sub_heading_text_size,
                'sub_heading_mobile_text_size' => $request->sub_heading_mobile_text_size,
                'sub_heading_text_color' => $request->sub_heading_text_color,
            ]);

        button_settings_model::where('customer_id', '=', $id)
            ->update([
                'button_1_text' => $request->button_1_text,
                'button_1_border_radius' => $request->button_1_border_radius,
                'button_1_border_width' => $request->button_1_border_width,
                'button_1_text_color' => $request->button_1_text_color,
                'button_1_background_color' => $request->button_1_background_color,
                'button_1_border_color' => $request->button_1_border_color,
                'button_2_text' => $request->button_2_text,
                'button_2_border_radius' => $request->button_2_border_radius,
                'button_2_border_width' => $request->button_2_border_width,
                'button_2_text_color' => $request->button_2_text_color,
                'button_2_background_color' => $request->button_2_background_color,
                'button_2_border_color' => $request->button_2_border_color,
                'Redirect_URL' => $request->Redirect_URL,
                'disabled_enabled_buttons' => $request->disabled_enabled_buttons,
            ]);

        button_optional_model::where('customer_id', '=', $id)
            ->update([
                'button_border_radius' => $request->button_border_radius,
                'button_border_width' => $request->button_border_width,
                'button_text_color' => $request->button_text_color,
                'button_background_color' => $request->button_background_color,
                'button_border_color' => $request->button_border_color,
                'enter_button_border_radius' => $request->enter_button_border_radius,
                'text_button' => $request->text_button,
                'enter_button_border_width' => $request->enter_button_border_width,
                'enter_button_text_color' => $request->enter_button_text_color,
                'enter_button_background_color' => $request->enter_button_background_color,
                'enter_button_border_color' => $request->enter_button_border_color,
                'disabled_enabled_optional' => $request->disabled_enabled_optional,
            ]);

        // upload_visual
        $imageName = $request->upload_visual_value !== '' ? $request->upload_visual_value  : '';
        if($request->upload_visual){
            if ($request->upload_visual) {
                $imageName = time() . '.' . $request->upload_visual->extension();
                $request->upload_visual->move(public_path('images'), $imageName);
            }
        };
        // end upload_visual

        // upload_banner
        $imageBanner = $request->upload_banner_value !== '' ? $request->upload_banner_value  : '';
        if ($request->upload_banner) {
            $imageBanner = time() . '.' . $request->upload_banner->extension();
            $request->upload_banner->move(public_path('images_baner'), $imageBanner);
        }
        // end upload_banner

        pop_up_settings_model::where('customer_id', '=', $id)
            ->update([
                'restriction_message' => $request->restriction_message,
                // 'cookie_lifetime_in_days' => $request->cookie_lifetime_in_days,
                'width' => $request->width,
                'border_radius' => $request->border_radius,
                'background_color' => $request->background_color,
                'border_width' => $request->border_width,
                'border_color' => $request->border_color,
                'top_and_bottom_padding' => $request->top_and_bottom_padding,
                'left_and_right_padding' => $request->left_and_right_padding,
                'upload_visual' => $imageName !== null ? $imageName : '', 
                'disabled_enabled_visual' => $request->disabled_enabled_visual,
                'upload_banner' => $imageBanner !== null ? $imageBanner : '',
                'disabled_enabled_banner' => $request->disabled_enabled_banner,
                'banner_background_color' => $request->banner_background_color,
                // 'banner_background_color_opacity' => $request->banner_background_color_opacity,

            ]);

            restriction_country_model::where('customer_id', '=', $id)->delete();
            
            // inserta data en restriction_country_model si es que no tiene
            if(isset($request->data)){
                foreach($request->data as $countrie){
                    $countries = [];
                    if(isset($countrie["country"])){
                        $countries = $countrie["country"];
                    }
                    $restriction_country_model = new restriction_country_model();
                    $restriction_country_model->country = implode(",", $countries);
                    $restriction_country_model->age = $countrie["age"];
                    $restriction_country_model->customer_id = $id;
                    $restriction_country_model->save();
                }
            }

        return redirect()->route('edit_customer', [$id]);
    }

    public function delete($id)
    {
        restriction_country_model::find($id)->delete();
  
        return response()->json(['success'=>'User Deleted Successfully!']);
    }
}