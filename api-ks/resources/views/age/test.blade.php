<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- <title>@yield('title')</title> --}}
    <title>{{ config('app.web', 'Heysenior test') }} @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- Custom fonts for this template-->
    <link rel="apple-touch-icon" sizes="180x180" href=" {{ asset('image/LV-image/apple-touch-icon.png') }}" rel="icon"
        type="imge/png">
    <link rel="icon" type="image/png" sizes="32x32" href=" {{ asset('image/LV-image/favicon-32x32.png') }}"
        rel="icon" type="imge/png">
    <link rel="icon" type="image/png" sizes="16x16" href=" {{ asset('image/LV-image/favicon-16x16.png') }}"
        rel="icon" type="imge/png">
    <link rel="shortcut icon" href=" {{ asset('image/LV-image/favicon.ico') }}">

    <!-- tables -->
    <link href=" {{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->

    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- SINGLE UPLOAD IMAGE -->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('upload-image/single_image.css') }}?v=<?php echo time(); ?>"> --}}
    <!-- END SINGLE UPLOAD IMAGE -->

    <!-- global estayles css-->
    <link href="{{ asset('css/admin.css') }}?v=<?php echo time(); ?>" rel="stylesheet">
    <link href="{{ asset('css/age_test.css') }}?v=<?php echo time(); ?>" rel="stylesheet">
    <!-- Picker color -->

    <link rel="stylesheet" href="{{ asset('picker-color/classic.min.css') }}" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

@extends('app_age.age_css')

<body class="test-gavy" id="hiden_pop_up"
    style="
        background-position: center center !important;
        background-size: 100% 106%;
        background-repeat: no-repeat;
        @if ($get_data_pop_up_settings->pop_up_settings_model->disabled_enabled_banner) background-image: url('{{ asset('images_baner/' . $get_data_pop_up_settings->pop_up_settings_model->upload_banner) }}'); @endif
        /* background-size: contain;
        background-size: cover; */
        background-color: {{ $get_data_pop_up_settings->pop_up_settings_model->banner_background_color }};
        opacity: {{ $get_data_pop_up_settings->pop_up_settings_model->banner_background_color_opacity }};
    ">
    <div class="card test-view test-gavy2" id="pop_up"
        style="
            text-align:center;
            margin-inline: auto;   
            border-style: solid;
            top: 25%;
            background-color: {{ $get_data_pop_up_settings->pop_up_settings_model->background_color }};
            width: {{ $get_data_pop_up_settings->pop_up_settings_model->width . 'px' }};
            border-radius: {{ $get_data_pop_up_settings->pop_up_settings_model->border_radius . 'px' }};
            border-width: {{ $get_data_pop_up_settings->pop_up_settings_model->border_width . 'px' }};
            border-color: {{ $get_data_pop_up_settings->pop_up_settings_model->border_color }};
            ">
        @if ($get_data_pop_up_settings->pop_up_settings_model->disabled_enabled_visual)
            <div id="image" class="mb-3">
                <img src="{{ asset('images/' . $get_data_pop_up_settings->pop_up_settings_model->upload_visual) }}"
                    id="chosen-image" class="image-vanner" style="border-r:2px;">
            </div>
        @endif
        <div class="col-lg-12 mb-3">
            <h5 class="card-title mobile_text test_plus" id="ID_text"
                style="
                    font-family:{{ $get_data_customizations->text_customizations_model->heading_fonts }};
                    font-weight:{{ $get_data_customizations->text_customizations_model->heading_text_weight }};
                    color:{{ $get_data_customizations->text_customizations_model->heading_text_color }};
                    ">
                {{ $get_data_customizations->text_customizations_model->heading_text }}</h5>
            <p class="card-text mobile_sub_text sub_test_plus" id="ID_sub_text"
                style="
                    font-family:{{ $get_data_customizations->text_customizations_model->sub_heading_fonts }};
                    font-weight:{{ $get_data_customizations->text_customizations_model->sub_heading_text_weight }};
                    color:{{ $get_data_customizations->text_customizations_model->sub_heading_text_color }};
                ">
                {{ $get_data_customizations->text_customizations_model->sub_heading_text }}
            </p>
            {{-- INIT TEST BUTONS AGE OPTIONAL --}}

            {{-- <p style="" id="message-text">Please verify your age to continue.</p> --}}
            <p style="display:none;" id="verification-failed">You are too young to view this website.</p>

            @if ($get_data_B_optional_settings->button_optional_model->disabled_enabled_optional)
                <div id="age_prueba" class="mb-2">
                    <input type="tel" id="birthmonth" name="birthmonth" placeholder="MM"
                        data-error="Please enter a valid month" maxlength="2" size="4" min="0"
                        max="12" class="inputs" onkeypress="return numbersonly(this, event)"
                        style="
                     border-color:{{ $get_data_B_optional_settings->button_optional_model->button_border_color }};
                     background-color:{{ $get_data_B_optional_settings->button_optional_model->button_background_color }};
                     border-radius:{{ $get_data_B_optional_settings->button_optional_model->button_border_radius . 'px' }};
                     border-width: {{ $get_data_B_optional_settings->button_optional_model->button_border_width . 'px' }};">

                    <input type="tel" id="birthday" name="birthday" placeholder="DD"
                        data-error="Please enter a valid day" maxlength="2" min="0" max="31"
                        size="4" class="inputs" onkeypress="return numbersonly(this, event)"
                        style="
                     border-color:{{ $get_data_B_optional_settings->button_optional_model->button_border_color }};
                     background-color:{{ $get_data_B_optional_settings->button_optional_model->button_background_color }};
                     border-radius:{{ $get_data_B_optional_settings->button_optional_model->button_border_radius . 'px' }};
                     border-width: {{ $get_data_B_optional_settings->button_optional_model->button_border_width . 'px' }};">

                    <input type="tel" id="birthyear" name="birthyear" min="0" max="2022" maxlength="4"
                        size="5" placeholder="YYYY" data-error="Please enter a valid year" class="inputs mb-2"
                        onkeypress="return numbersonly(this, event)"
                        style="
                     border-color:{{ $get_data_B_optional_settings->button_optional_model->button_border_color }};
                     background-color:{{ $get_data_B_optional_settings->button_optional_model->button_background_color }};
                     border-radius:{{ $get_data_B_optional_settings->button_optional_model->button_border_radius . 'px' }};
                     border-width: {{ $get_data_B_optional_settings->button_optional_model->button_border_width . 'px' }};">
                    <div class="mb-2">
                        <button class="btn btn-outline-danger btn-lg" type="button" onclick="checkAge();"
                            id="enter"
                            style="
                     color:{{ $get_data_B_optional_settings->button_optional_model->enter_button_text_color }};
                     border-color:{{ $get_data_B_optional_settings->button_optional_model->enter_button_border_color }};
                     background-color:{{ $get_data_B_optional_settings->button_optional_model->enter_button_background_color }};
                     border-radius:{{ $get_data_B_optional_settings->button_optional_model->enter_button_border_radius . 'px' }};
                     border-width: {{ $get_data_B_optional_settings->button_optional_model->enter_button_border_width . 'px' }};">
                            {{ $get_data_B_optional_settings->button_optional_model->text_button }}
                        </button>
                    </div>
                </div>
            @endif
            {{-- END TEST BUTONS AGE OPTIONAL --}}
            @if ($get_data_button_settings->button_settings_model->disabled_enabled_buttons)
                <a href="javascript:void();" style="text-decoration: none;">
                    <button class="btn btn-lg" id="IDbutton_global" type="button"
                        style="
                        background-color:{{ $get_data_button_settings->button_settings_model->button_1_background_color }} ;
                        color:{{ $get_data_button_settings->button_settings_model->button_1_text_color }};
                        border-radius: {{ $get_data_button_settings->button_settings_model->button_1_border_radius . 'px' }};
                        border-width: {{ $get_data_button_settings->button_settings_model->button_1_border_width . 'px' }};
                        border-color: {{ $get_data_button_settings->button_settings_model->button_1_border_color }}
                    ">
                        {{ $get_data_button_settings->button_settings_model->button_1_text }}</button>
                </a>
                <a href="{{ $get_data_button_settings->button_settings_model->Redirect_URL }}"
                    style="text-decoration: none;">
                    <button class="btn btn-lg" id="IDbutton_2_global" type="button"
                        style="
                        background-color: {{ $get_data_button_settings->button_settings_model->button_2_background_color }} ;
                        color:{{ $get_data_button_settings->button_settings_model->button_2_text_color }};
                        border-radius: {{ $get_data_button_settings->button_settings_model->button_2_border_radius . 'px' }} ;
                        border-width: {{ $get_data_button_settings->button_settings_model->button_2_border_width . 'px' }} ;
                        border-color: {{ $get_data_button_settings->button_settings_model->button_2_border_color }} ;
                    ">
                        {{ $get_data_button_settings->button_settings_model->button_2_text }}
                    </button>
                </a>
            @endif
        </div>
    </div>
</body>

</html>