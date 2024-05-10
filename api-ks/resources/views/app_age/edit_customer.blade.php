@extends('layouts.layouts')
@extends('app_age.age_css')
@section('title', 'Age Test')
@section('content')
    <div class="container-fluid ATF_container-fluid">
        <p class="ATF-mb"></p>
        <nav class="col-lg-12 mb-2 test-1">
            <h2 class="text-gray-900">Age verifier form</h2>
            <p class="text-gray-600" style="font-size:1rem;">Show highly related recommendations on product and cart pages.
            </p>
        </nav>

        <div class="d-sm-flex align-items-center justify-content-between mb-4"></div>
        <form role="form" method="POST" action="{{ route('customer_up', [$get_data_customizations->id]) }}"
            accept-charset="utf-8" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row mb-4">
                <label class="col-sm-1 col-form-label text-gray-800">Customer</label>
                <div class="col-lg-7">
                    <input type="text" value="{{ $get_data_customizations->shop_url }}" disabled class="form-control"
                        id="shop_url" name="shop_url">
                </div>
            </div>
            <div class="row">
                {{-- HEADING --}}
                <div class="col-lg-8 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h2 class="text-gray-900"><i class="fas fa-fw fa-cogs"></i>Text Customizations</h2>
                        </div>
                        {{-- HEADING TEXT --}}
                        <div class="card-header bg-white py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Heading</h6>
                        </div>
                        <div class="form-row atf-input mb-3 py-2">
                            <div class="form-group col-md-4">
                                <div class="form-group atf-text">
                                    <input class="form-check-input" type="hidden" value="0"
                                        name="disabled_enabled_text">
                                    <input class="form-check-input aft-disabled-enabled-text" onclick="changeCkh(this);"
                                        type="checkbox" name="disabled_enabled_text" id="disabled_enabled_text"
                                        {{ $get_data_customizations->text_customizations_model->disabled_enabled_text == 1 ? 'value=1 checked="checked"' : 'value=0' }}>

                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2"
                                        for="defaultCheck1">text</label>
                                </div>
                                <input type="text" class="form-control" id="heading_text"
                                    onkeyup="changeValue(this.value)" name="heading_text"
                                    value="{{ $get_data_customizations->text_customizations_model->heading_text }}"
                                    autocomplete="off">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-check-label text-admin2-color font-weight-bold mb-2">Text Weight</label>
                                <select class="form-control" id="heading_text_weight" name="heading_text_weight"
                                    onchange="TextWeight(this);">
                                    @foreach ($selected_Text_Weight as $value)
                                        <option value="{{ $value }}"
                                            {{ $get_data_customizations->text_customizations_model->heading_text_weight == $value ? 'selected' : '' }}>
                                            {{ $value }} </option>;
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-check-label text-admin2-color font-weight-bold mb-2">Fonts</label>
                                <select class="form-control" name="heading_fonts" id="heading_fonts"
                                    onchange="setFont(this)">
                                    @foreach ($selected_Text_font as $value)
                                        <option value="{{ $value }}"
                                            {{ $get_data_customizations->text_customizations_model->heading_fonts == $value ? 'selected' : '' }}>
                                            {{ $value }}</option>;
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="card-body col-lg-12">
                            <div class="row">
                                <div class="col-lg-4 mb-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Text
                                        Size (PX)</label>
                                    <input type="number" min="1" max="100"
                                        value="{{ $get_data_customizations->text_customizations_model->heading_text_size }}"
                                        class="form-control" name="heading_text_size" id="heading_text_size"
                                        autocomplete="off">
                                </div>

                                <div class="col-lg-4 mb-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Mobile Text
                                        Size (PX)</label>
                                    <input type="number" min="1" max="100"
                                        value="{{ $get_data_customizations->text_customizations_model->heading_mobile_text_size }}"
                                        class="form-control" id="heading_mobile_text_size" name="heading_mobile_text_size"
                                        autocomplete="off">
                                </div>

                                <div class="col-lg-4 mb-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Text
                                        Color</label>
                                    <div class="row picker_position">
                                        <div class="col-1 panel-global text_color" name="heading_text_color" id="text_color"
                                            style="background-color:{{ $get_data_customizations->text_customizations_model->heading_text_color }}">
                                            <div class="col-2 color-picker"></div>
                                        </div>
                                        <input type="text" class="col-10 align-self-center atn-border"
                                            name="heading_text_color" id="result_text_color"
                                            value="{{ $get_data_customizations->text_customizations_model->heading_text_color }}"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- END HEADING TEXT --}}
                        {{-- SUB HEADING TEXT --}}
                        <div class="card-header bg-white py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Sub-Heading</h6>
                        </div>
                        <div class="form-row atf-input mb-3 py-2">
                            <div class="form-group col-md-4">
                                <div class="form-group atf-text">
                                    <input class="form-check-input" type="hidden" value="0"
                                        name="disabled_enabled_sub_text">
                                    <input class="form-check-input aft-disabled-enabled-sub-text"
                                        onclick="changeCkh(this);" type="checkbox" name="disabled_enabled_sub_text"
                                        id="disabled_enabled_sub_text"
                                        {{ $get_data_customizations->text_customizations_model->disabled_enabled_sub_text == 1 ? 'value=1 checked="checked"' : 'value=0' }}>
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2"
                                        for="defaultCheck2">text</label>
                                </div>
                                <input type="text" placeholder="text" class="form-control" id="sub_heading_text"
                                    onkeyup="changeValueTest(this.value)" name="sub_heading_text"
                                    value="{{ $get_data_customizations->text_customizations_model->sub_heading_text }}"
                                    autocomplete="off">
                            </div>

                            <div class="form-group col-md-4">
                                <label class="form-check-label text-admin2-color font-weight-bold mb-2">Text Weight</label>
                                <select class="form-control" name="sub_heading_text_weight" id="sub_heading_text_weight"
                                    onchange="SubTextWeight(this);">
                                    @foreach ($selected_Text_Weight as $value)
                                        <option value="{{ $value }}"
                                            {{ $get_data_customizations->text_customizations_model->sub_heading_text_weight == $value ? 'selected' : '' }}>
                                            {{ $value }} </option>;
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label class="form-check-label text-admin2-color font-weight-bold mb-2">Fonts</label>
                                <select class="form-control" name="sub_heading_fonts" id="sub_heading_fonts"
                                    onchange="setFont_1(this)">
                                    @foreach ($selected_Text_font as $value)
                                        <option value="{{ $value }}"
                                            {{ $get_data_customizations->text_customizations_model->sub_heading_fonts == $value ? 'selected' : '' }}>
                                            {{ $value }}</option>;
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="card-body col-lg-12">
                            <div class="row">
                                <div class="col-lg-4 mb-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Text
                                        Size (PX)</label>
                                    <input type="number" min="1" max="100" class="form-control"
                                        value="{{ $get_data_customizations->text_customizations_model->sub_heading_text_size }}"
                                        id="sub_heading_text_size" name="sub_heading_text_size" autocomplete="off">
                                </div>

                                <div class="col-lg-4 mb-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Mobile Text
                                        Size (PX)</label>
                                    <input type="number" min="1" max="100" placeholder=""
                                        value="{{ $get_data_customizations->text_customizations_model->sub_heading_mobile_text_size }}"
                                        class="form-control" id="sub_heading_mobile_text_size"
                                        name="sub_heading_mobile_text_size" autocomplete="off">
                                </div>

                                <div class="col-lg-4 mb-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Text
                                        Color</label>
                                    <div class="row picker_position">
                                        <div class="col-1 sub_text_color panel-global" id="sub_text_color"
                                            name="sub_heading_text_color"
                                            style="background-color:{{ $get_data_customizations->text_customizations_model->sub_heading_text_color }}">
                                            <div class="col-2 color-picker"></div>
                                        </div>
                                        <input type="text" class="col-10 align-self-center atn-border"
                                            name="sub_heading_text_color" id="result_sub_text_color"
                                            value="{{ $get_data_customizations->text_customizations_model->sub_heading_text_color }}"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- END HEADING TEXT --}}
                    </div>
                </div>
                {{-- END HEADING --}}
                {{-- banner Model one --}}
                <div class="col-lg-3 shop_fixed-top dvOcultar_banner_1" id="hiden_pop_up"
                    data-url="{{ asset('images_baner/' . $get_data_pop_up_settings->pop_up_settings_model->upload_banner) }}"
                    style="
                                    /* display:none; */
                                    background-attachment: scroll !important;
                                    background-position: center center !important;
                                    z-index: auto;
                                    background-size:cover!important;
                                    background-repeat: no-repeat;
                                    @if ($get_data_pop_up_settings->pop_up_settings_model->disabled_enabled_banner) background-image: url('{{ asset('images_baner/' . $get_data_pop_up_settings->pop_up_settings_model->upload_banner) }}'); @endif
                                    background-color: {{ $get_data_pop_up_settings->pop_up_settings_model->banner_background_color }};
                                    opacity: {{ $get_data_pop_up_settings->pop_up_settings_model->banner_background_color_opacity }};
                                ">
                    <div class="card text-center" id="pop_up" {{-- left: 7rem !importan; --}}
                        style="   
                                    border-style: solid;
                                    top: inherit;
                                    margin: auto;
                                    background-color: {{ $get_data_pop_up_settings->pop_up_settings_model->background_color }};
                                    width: {{ $get_data_pop_up_settings->pop_up_settings_model->width . 'rem' }};
                                    border-radius: {{ $get_data_pop_up_settings->pop_up_settings_model->border_radius . 'px' }};
                                    border-width: {{ $get_data_pop_up_settings->pop_up_settings_model->border_width . 'px' }};
                                    border-color: {{ $get_data_pop_up_settings->pop_up_settings_model->border_color }};

                                    padding-top: {{ $get_data_pop_up_settings->pop_up_settings_model->top_and_bottom_padding . 'px' }};
                                    padding-bottom: {{ $get_data_pop_up_settings->pop_up_settings_model->left_and_right_padding . 'px' }};
                                    ">
                        @if ($get_data_pop_up_settings->pop_up_settings_model->disabled_enabled_visual)
                            <div id="dvOcultar_visual_1" class="mb-3 ">
                                <img src="{{ asset('images/' . $get_data_pop_up_settings->pop_up_settings_model->upload_visual) }}"
                                    class="image-vanner" style="border-radius:2px;" id="image-visual-banner">
                            </div>
                        @endif
                        <div class="col-lg-12 mb-3">
                            @if ($get_data_customizations->text_customizations_model->disabled_enabled_text)
                                <h5 class="card-title" id="ID_text"
                                    style="
                                        font-family:{{ $get_data_customizations->text_customizations_model->heading_fonts }};
                                        font-weight:{{ $get_data_customizations->text_customizations_model->heading_text_weight }};
                                        font-size: {{ $get_data_customizations->text_customizations_model->heading_text_size . 'px' }};
                                        color:{{ $get_data_customizations->text_customizations_model->heading_text_color }};
                                        ">
                                    {{ $get_data_customizations->text_customizations_model->heading_text }}</h5>
                            @endif

                            @if ($get_data_customizations->text_customizations_model->disabled_enabled_sub_text)
                                <p class="card-text" id="ID_sub_text"
                                    style="
                                        font-family:{{ $get_data_customizations->text_customizations_model->sub_heading_fonts }};
                                        font-weight:{{ $get_data_customizations->text_customizations_model->sub_heading_text_weight }};
                                        font-size: {{ $get_data_customizations->text_customizations_model->sub_heading_text_size . 'px' }};
                                        color:{{ $get_data_customizations->text_customizations_model->sub_heading_text_color }};
                                        ">
                                    {{ $get_data_customizations->text_customizations_model->sub_heading_text }}
                                </p>
                            @endif

                            {{-- INIT TEST BUTONS AGE OPTIONAL --}}

                            {{-- <p style="" id="message-text">Please verify your age to continue.</p> --}}
                            <p style="display:none;" id="verification-failed">You are too young to view this website.</p>

                            @if ($get_data_B_optional_settings->button_optional_model->disabled_enabled_optional)
                                <div id="age_prueba" class="mb-2">
                                    <input type="tel" id="birthmonth" name="birthmonth" placeholder="MM"
                                        data-error="Please enter a valid month" maxlength="2" size="4"
                                        min="0" max="12" class="inputs"
                                        onkeypress="return numbersonly(this, event)"
                                        style="            
                                    border-color:{{ $get_data_B_optional_settings->button_optional_model->button_border_color }};
                                    background-color:{{ $get_data_B_optional_settings->button_optional_model->button_background_color }};
                                    border-radius:{{ $get_data_B_optional_settings->button_optional_model->button_border_radius . 'px' }};
                                    border-width: {{ $get_data_B_optional_settings->button_optional_model->button_border_width . 'px' }};">

                                    <input type="tel" id="birthday" name="birthday" placeholder="DD"
                                        data-error="Please enter a valid day" maxlength="2" min="0"
                                        max="31" size="4" class="inputs"
                                        onkeypress="return numbersonly(this, event)"
                                        style="
                                    border-color:{{ $get_data_B_optional_settings->button_optional_model->button_border_color }};
                                    background-color:{{ $get_data_B_optional_settings->button_optional_model->button_background_color }};
                                    border-radius:{{ $get_data_B_optional_settings->button_optional_model->button_border_radius . 'px' }};
                                    border-width: {{ $get_data_B_optional_settings->button_optional_model->button_border_width . 'px' }};">

                                    <input type="tel" id="birthyear" name="birthyear" min="0" max="2022"
                                        maxlength="4" size="5" placeholder="YYYY"
                                        data-error="Please enter a valid year" class="inputs mb-2"
                                        onkeypress="return numbersonly(this, event)"
                                        style="
                                    border-color:{{ $get_data_B_optional_settings->button_optional_model->button_border_color }};
                                    background-color:{{ $get_data_B_optional_settings->button_optional_model->button_background_color }};
                                    border-radius:{{ $get_data_B_optional_settings->button_optional_model->button_border_radius . 'px' }};
                                    border-width: {{ $get_data_B_optional_settings->button_optional_model->button_border_width . 'px' }};">
                                    <div class="mb-2">
                                        <button class="btn btn-outline-danger btn-lg" type="button"
                                            onclick="checkAge();" id="enter"
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
                                <div id="age_prueba_1">
                                    <a href="javascript:void();" style="text-decoration: none;">
                                        <button class="btn btn-lg" id="IDbutton_global" type="button"
                                            style="
                                            background-color:{{ $get_data_button_settings->button_settings_model->button_1_background_color }};
                                            color:{{ $get_data_button_settings->button_settings_model->button_1_text_color }};
                                            border-radius: {{ $get_data_button_settings->button_settings_model->button_1_border_radius . 'px' }};
                                            border-width: {{ $get_data_button_settings->button_settings_model->button_1_border_width . 'px' }};
                                            border-color: {{ $get_data_button_settings->button_settings_model->button_1_border_color }};
                                            ">
                                            {{ $get_data_button_settings->button_settings_model->button_1_text }}</button>
                                    </a>
                                    <a href="javascript:void(); {{ $get_data_button_settings->button_settings_model->Redirect_URL }}"
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
                                </div>
                            @endif
                        </div>
                    </div>
                    {{-- </div> --}}
                </div>
                {{-- END banner Model one --}}

                {{-- banner Model two --}}
                {{-- id="contenido_1" --}}
                <div class="col-lg-4 mb-4 shop_fixed-top" style="display:none;">
                    <div style="background-image:url('images_age/cucis.jpg'); background-repeat: no-repeat;">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-auto p-5 text-center" id="pop_up"
                                style="
                                   background-color: {{ $get_data_pop_up_settings->pop_up_settings_model->background_color }};
                                   opacity: {{ $get_data_pop_up_settings->pop_up_settings_model->banner_background_color_opacity }};
                                    width: {{ $get_data_pop_up_settings->pop_up_settings_model->width . 'rem' }};
                                   border-radius: {{ $get_data_pop_up_settings->pop_up_settings_model->border_radius . 'px' }};
                                   border-style: solid;
                                   border-width: {{ $get_data_pop_up_settings->pop_up_settings_model->border_width . 'px' }};
                                   border-color: {{ $get_data_pop_up_settings->pop_up_settings_model->border_color }};
                                    ">

                                <figure id="image" class="image-test">
                                    <img src="{{ asset('images/' . $get_data_pop_up_settings->pop_up_settings_model->upload_visual) }}"
                                        class="mb-4 imageclass " style="border-radius:2px;" id="">
                                    {{-- id="chosen-image" --}}
                                    {{-- <figcaption id="file-name"></figcaption> --}}
                                </figure>
                                {{-- HEADING TEXT --}}
                                <div text_class>
                                    <p class="exit-intent-wrapper" id="ID_text"
                                        style="
                                            font-family:{{ $get_data_customizations->text_customizations_model->heading_fonts }};
                                            font-weight:{{ $get_data_customizations->text_customizations_model->heading_text_weight }};
                                            font-size: {{ $get_data_customizations->text_customizations_model->heading_text_size . 'px' }};
                                            color:{{ $get_data_customizations->text_customizations_model->heading_text_color }};
                                            ">
                                        {{ $get_data_customizations->text_customizations_model->heading_text }}
                                    </p>
                                    <p class="sub-heading-fonts" id="ID_sub_text"
                                        style="
                                            font-family:{{ $get_data_customizations->text_customizations_model->sub_heading_fonts }};
                                            font-weight:{{ $get_data_customizations->text_customizations_model->sub_heading_text_weight }};
                                            font-size: {{ $get_data_customizations->text_customizations_model->sub_heading_text_size . 'px' }};
                                            color:{{ $get_data_customizations->text_customizations_model->sub_heading_text_color }};">
                                        {{ $get_data_customizations->text_customizations_model->sub_heading_text }}
                                    </p>
                                </div>
                                {{-- END HEADING TEXT --}}

                                {{-- <div class="color-text-ATF mb-3">
                                    Please, enter your birthdate:
                                </div> --}}
                                {{-- <div class="">
                                    <div class="">
                                        <div class="col-lg-12 mb-2">
                                            <input type="text" name="date" id="date" placeholder="date"
                                                max="99" maxlength="2" class="col-3" value=""
                                                spellcheck="false" data-ms-editor="true">
                                            <input type="text" name="month" id="month" placeholder="month"
                                                max="99" maxlength="2" class="col-3" value=""
                                                spellcheck="false" data-ms-editor="true">
                                            <input type="text" name="year" id="year" placeholder="year"
                                                max="9999" maxlength="4" class="col-3" value=""
                                                spellcheck="false" data-ms-editor="true">
                                        </div>
                                        <input type="button" class="" name="submit" value="submit"
                                            onclick="age()" />
                                    </div>
                                </div> --}}

                                {{-- BUTTONS  --}}
                                <div class="">
                                    <div class="">
                                        <div class="col-lg-12 mb-2">
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
                                        </div>
                                    </div>
                                </div>
                                {{-- END BUTTONS  --}}
                                <p class="age text-danger" id="age"></p>
                                <div class="">
                                    By entering this site you are agreeing to the
                                    <a href="">Terms of Use</a> and <a href="">Privacy Policy</a>.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end banner Model two --}}

                {{-- BUTTONS --}}
                <div class="col-lg-8 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="form-row atf-input">
                                <div class="form-group col-md-9 atf-margin-title-sections">
                                    <h2 class="text-gray-900"><i class="fas fa-fw fa-cogs"></i>Button Settings</h2>
                                </div>
                                <div class="form-group col-md-3 atf-margin-title-sections">
                                    <div class="custom-control custom-switch top-custom-switch">
                                        <label>Disabled</label>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
                                        <input type="hidden" class="custom-control-input" value="0"
                                            name="disabled_enabled_buttons" <?php if ($get_data_button_settings->button_settings_model->disabled_enabled_buttons) { ?>checked="checked"
                                            <?php } ?>>
                                        <input type="checkbox" class="custom-control-input disabled_buttons check"
                                            value="1" name="disabled_enabled_buttons" id="customSwitch3"
                                            <?php if ($get_data_button_settings->button_settings_model->disabled_enabled_buttons) { ?>checked="checked" <?php } ?>>
                                        <label class="custom-control-label" for="customSwitch3">Enabled</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- @if ($get_data_button_settings->button_settings_model->disabled_enabled_buttons) --}}
                        <div id="disabled_buttons_settings">
                            <div class="card-header bg-white py-3 mb-3">
                                <h6 class="m-0 font-weight-bold text-primary">Button 1</h6>
                            </div>
                            {{-- BUTTON --}}
                            <div class="form-row atf-input mb-3">
                                <div class="form-group col-md-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">text</label>
                                    <input type="text" class="form-control" onkeyup="changeButtonText(this.value)"
                                        id="button_1_text" name="button_1_text"
                                        value="{{ $get_data_button_settings->button_settings_model->button_1_text }}"
                                        autocomplete="off">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Border
                                        radius
                                        (PX)</label>
                                    <input type="number" min="1" max="100" placeholder=""
                                        value="{{ $get_data_button_settings->button_settings_model->button_1_border_radius }}"
                                        class="form-control" id="button_1_border_radius" name="button_1_border_radius"
                                        autocomplete="off">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Border
                                        weight
                                        (PX)</label>
                                    <input type="number" min="1" max="100" placeholder=""
                                        value="{{ $get_data_button_settings->button_settings_model->button_1_border_width }}"
                                        class="form-control" id="button_1_border_width" name="button_1_border_width"
                                        autocomplete="off">
                                </div>
                            </div>
                            {{-- END BUTTON --}}
                            {{-- BUTTON COLOR --}}
                            <div class="form-row atf-input mb-3">
                                <div class="form-group col-md-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Text
                                        Color</label>
                                    <div class="row picker_position">
                                        <div class="col-1 panel_button panel-global" id="panel_button"
                                            name="button_1_text_color"
                                            style="background-color:{{ $get_data_button_settings->button_settings_model->button_1_text_color }}">
                                            <div class="col-2 color-picker"></div>
                                        </div>
                                        <input type="text" class="col-10 align-self-center atn-border"
                                            name="button_1_text_color" id="result_button"
                                            value="{{ $get_data_button_settings->button_settings_model->button_1_text_color }}"
                                            autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Background
                                        Color</label>
                                    <div class="row picker_position">
                                        <div class="col-1 panel_button_background panel-global"
                                            name="button_1_background_color" id="panel_button_background"
                                            style="background-color:{{ $get_data_button_settings->button_settings_model->button_1_background_color }}">
                                            <div class="col-2 color-picker"></div>
                                        </div>
                                        <input type="text" class="col-10 align-self-center atn-border"
                                            name="button_1_background_color" id="result_button_background"
                                            value="{{ $get_data_button_settings->button_settings_model->button_1_background_color }}"
                                            autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Border
                                        Color</label>
                                    <div class="row picker_position">
                                        <div class="col-1 panel_button_border panel-global" name="button_1_border_color"
                                            id="panel_button_border"
                                            style="background-color:{{ $get_data_button_settings->button_settings_model->button_1_border_color }}">
                                            <div class="col-2 color-picker"></div>
                                        </div>
                                        <input type="text" class="col-10 align-self-center atn-border"
                                            name="button_1_border_color" id="result_button_border"
                                            value="{{ $get_data_button_settings->button_settings_model->button_1_border_color }}"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            {{-- END BUTTON COLOR --}}
                            {{-- BUTTON 2 --}}
                            <div class="card-header bg-white py-3 mb-3">
                                <h6 class="m-0 font-weight-bold text-primary">Button 2</h6>
                            </div>
                            <div class="form-row atf-input mb-3">
                                <div class="form-group col-md-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Text</label>
                                    <input type="text" class="form-control" id="button_2_text"
                                        onkeyup="changeButtonText_2(this.value)" name="button_2_text"
                                        value="{{ $get_data_button_settings->button_settings_model->button_2_text }}"
                                        autocomplete="off">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Border
                                        radius
                                        (PX)</label>
                                    <input type="number" min="1" max="100"
                                        value="{{ $get_data_button_settings->button_settings_model->button_2_border_radius }}"
                                        class="form-control" id="button_2_border_radius" name="button_2_border_radius"
                                        autocomplete="off">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Border
                                        width
                                        (PX)</label>
                                    <input type="number" min="1" max="100"
                                        value="{{ $get_data_button_settings->button_settings_model->button_2_border_width }}"
                                        class="form-control" id="button_2_border_width" name="button_2_border_width"
                                        autocomplete="off">
                                </div>
                            </div>
                            {{-- END BUTTON 2 --}}
                            {{-- BUTTON COLOR 2 --}}
                            <div class="form-row atf-input mb-3">
                                <div class="form-group col-md-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Text
                                        Color</label>
                                    <div class="row picker_position">
                                        <div class="col-1 button_2_color panel-global" name="button_2_text_color"
                                            id="button_2_color"
                                            style="background-color:{{ $get_data_button_settings->button_settings_model->button_2_text_color }}">
                                            <div class="col-2 color-picker"></div>
                                        </div>
                                        <input type="text" class="col-10 align-self-center atn-border"
                                            name="button_2_text_color" id="result_button_2_color"
                                            value="{{ $get_data_button_settings->button_settings_model->button_2_text_color }}"
                                            autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Background
                                        Color</label>
                                    <div class="row picker_position">
                                        <div class="col-1 button_2_background panel-global"
                                            name="button_2_background_color" id="button_2_background"
                                            style="background-color:{{ $get_data_button_settings->button_settings_model->button_2_background_color }}">
                                            <div class="col-2 color-picker"></div>
                                        </div>
                                        <input type="text" class="col-10 align-self-center atn-border"
                                            name="button_2_background_color" id="result_button_2_background"
                                            value="{{ $get_data_button_settings->button_settings_model->button_2_background_color }}"
                                            autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Border
                                        Color</label>
                                    <div class="row picker_position">
                                        <div class="col-1 button_2_border panel-global" name="button_2_border_color"
                                            id="button_2_border"
                                            style="background-color:{{ $get_data_button_settings->button_settings_model->button_2_border_color }}">
                                            <div class="col-2 color-picker"></div>
                                        </div>
                                        <input type="text" class="col-10 align-self-center atn-border"
                                            name="button_2_border_color" id="reslut_button_2_border"
                                            value="{{ $get_data_button_settings->button_settings_model->button_2_border_color }}"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-8 url_div mb-3">
                                <label class="form-check-label text-admin2-color font-weight-bold mb-2">Redirect
                                    URL</label>
                                <input type="text" class="form-control" onkeyup="changeButtonText_1(this.value)"
                                    id="Redirect_URL" name="Redirect_URL"
                                    value="{{ $get_data_button_settings->button_settings_model->Redirect_URL }}"
                                    autocomplete="off">
                            </div>
                        </div>
                        {{-- @endif --}}
                        {{-- END BUTTON COLOR 2 --}}
                        {{-- INIT BUTTONS AGE OPTIONALS --}}
                        <div class="card-header py-3">
                            <div class="form-row atf-input">
                                <div class="form-group col-md-9 atf-margin-title-sections">
                                    <h2 class="text-gray-900"><i class="fas fa-fw fa-cogs"></i>Button Settings Optionals
                                    </h2>
                                </div>
                                <div class="form-group col-md-3 atf-margin-title-sections">
                                    <div class="custom-control custom-switch top-custom-switch">
                                        <label>Disabled</label>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
                                        <input type="hidden" class="custom-control-input" value="0"
                                            name="disabled_enabled_optional" <?php if ($get_data_B_optional_settings->button_optional_model->disabled_enabled_optional) { ?>checked="checked"
                                            <?php } ?>>
                                        <input type="checkbox" class="custom-control-input disabled_optional"
                                            value="1" name="disabled_enabled_optional" id="customSwitch4"
                                            <?php if ($get_data_B_optional_settings->button_optional_model->disabled_enabled_optional) { ?>checked="checked" <?php } ?>>
                                        <label class="custom-control-label" for="customSwitch4">Enabled</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- @if ($get_data_B_optional_settings->button_optional_model->disabled_enabled_optional) --}}
                        <div id="disabled_buttons_optional">
                            <div class="card-header bg-white py-4 mb-3">
                                <h6 class="m-0 font-weight-bold text-primary">Buttons Age Optionals</h6>
                            </div>
                            <div class="form-row atf-input mb-3">
                                <div class="form-group col-md-4 ">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Border
                                        radius
                                        (PX)</label>
                                    <input type="number" min="1" max="100"
                                        value="{{ $get_data_B_optional_settings->button_optional_model->button_border_radius }}"
                                        class="form-control" id="button_border_radius" name="button_border_radius"
                                        autocomplete="off">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Border
                                        width
                                        (PX)</label>
                                    <input type="number" min="1" max="100"
                                        value="{{ $get_data_B_optional_settings->button_optional_model->button_border_width }}"
                                        class="form-control" id="button_border_width" name="button_border_width"
                                        autocomplete="off">
                                </div>
                            </div>
                            {{--  INIT OPTIONAL BUTTONS COLOR --}}
                            <div class="form-row atf-input mb-3">
                                <div class="form-group col-md-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Text
                                        Color</label>
                                    <div class="row picker_position">
                                        <div class="col-1 optional_text panel-global" name="button_text_color"
                                            id="optional_text"
                                            style="background-color:{{ $get_data_B_optional_settings->button_optional_model->button_text_color }}">
                                            <div class="col-2 color-picker"></div>
                                        </div>
                                        <input type="text" class="col-10 align-self-center atn-border"
                                            name="button_text_color" id="reslut_optional_text"
                                            value="{{ $get_data_B_optional_settings->button_optional_model->button_text_color }}"
                                            autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Background
                                        Color</label>
                                    <div class="row picker_position">
                                        <div class="col-1 optional_background panel-global" name="button_background_color"
                                            id="optional_background"
                                            style="background-color:{{ $get_data_B_optional_settings->button_optional_model->button_background_color }};">
                                            <div class="col-2 color-picker"></div>
                                        </div>
                                        <input type="text" class="col-10 align-self-center atn-border"
                                            name="button_background_color" id="reslut_optional_background"
                                            value="{{ $get_data_B_optional_settings->button_optional_model->button_background_color }}"
                                            autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Border
                                        Color</label>
                                    <div class="row picker_position">
                                        <div class="col-1 optional_border panel-global" name="button_border_color"
                                            id="optional_border"
                                            style="background-color:{{ $get_data_B_optional_settings->button_optional_model->button_border_color }};">
                                            <div class="col-2 color-picker"></div>
                                        </div>
                                        <input type="text" class="col-10 align-self-center atn-border"
                                            name="button_border_color" id="reslut_optional_border"
                                            value="{{ $get_data_B_optional_settings->button_optional_model->button_border_color }}"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            {{-- END OPTIONAL BUTTON COLOR --}}
                            {{-- INIT ENTER BUTTON AGE OPTIONALS --}}
                            <div class="card-header bg-white py-3 mb-3">
                                <h6 class="m-0 font-weight-bold text-primary">Text button age optionals</h6>
                            </div>
                            <div class="form-row atf-input mb-3">
                                <div class="form-group col-md-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Text
                                        Button</label>
                                    <input type="text" class="form-control" id="text_button"
                                        onkeyup="changeButtonText_enter(this.value)" name="text_button"
                                        value="{{ $get_data_B_optional_settings->button_optional_model->text_button }}"
                                        autocomplete="off">
                                </div>

                                <div class="form-group col-md-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Border
                                        radius
                                        (PX)</label>
                                    <input type="number" min="1" max="100"
                                        value="{{ $get_data_B_optional_settings->button_optional_model->enter_button_border_radius }}"
                                        class="form-control" id="enter_button_border_radius"
                                        name="enter_button_border_radius" autocomplete="off">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Border
                                        width
                                        (PX)</label>
                                    <input type="number" min="1" max="100"
                                        value="{{ $get_data_B_optional_settings->button_optional_model->enter_button_border_width }}"
                                        class="form-control" id="enter_button_border_width"
                                        name="enter_button_border_width" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-row atf-input mb-3">
                                <div class="form-group col-md-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Text
                                        Color</label>
                                    <div class="row picker_position">
                                        <div class="col-1 optional_enter_text panel-global" name="enter_button_text_color"
                                            id="optional_enter_text"
                                            style="background-color:{{ $get_data_B_optional_settings->button_optional_model->enter_button_text_color }};">
                                            <div class="col-2 color-picker"></div>
                                        </div>
                                        <input type="text" class="col-10 align-self-center atn-border"
                                            name="enter_button_text_color" id="reslut_optional_enter_text"
                                            value="{{ $get_data_B_optional_settings->button_optional_model->enter_button_text_color }}"
                                            autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Background
                                        Color</label>
                                    <div class="row picker_position">
                                        <div class="col-1 optional_enter_background panel-global"
                                            name="button_2_background_color" id="optional_enter_background"
                                            style="background-color:{{ $get_data_B_optional_settings->button_optional_model->enter_button_background_color }};">
                                            <div class="col-2 color-picker"></div>
                                        </div>
                                        <input type="text" class="col-10 align-self-center atn-border"
                                            name="enter_button_background_color" id="reslut_optional_enter_background"
                                            value="{{ $get_data_B_optional_settings->button_optional_model->enter_button_background_color }}"
                                            autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-check-label text-admin2-color font-weight-bold mb-2">Border
                                        Color</label>
                                    <div class="row picker_position">
                                        <div class="col-1 optional_enter_border panel-global"
                                            name="enter_button_border_color" id="optional_enter_border"
                                            style="background-color:{{ $get_data_B_optional_settings->button_optional_model->enter_button_border_color }};">
                                            <div class="col-2 color-picker"></div>
                                        </div>
                                        <input type="text" class="col-10 align-self-center atn-border"
                                            name="enter_button_border_color" id="reslut_optional_enter_border"
                                            value="{{ $get_data_B_optional_settings->button_optional_model->enter_button_border_color }}"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-8 url_div mb-3">
                                <label class="form-check-label text-admin2-color font-weight-bold mb-2">Redirect
                                    URL</label>
                                <input type="text" class="form-control" onkeyup="changeButtonText_3(this.value)"
                                    id="URL_2" name="Redirect_URL"
                                    value="{{ $get_data_button_settings->button_settings_model->Redirect_URL }}"
                                    autocomplete="off">
                            </div>
                        </div>
                        {{-- @endif --}}
                        {{-- END ENTER BUTTON AGE OPTIONALS --}}
                        {{-- END BUTTONS AGE OPTIONALS --}}
                    </div>
                </div>
                {{-- end BUTTONS --}}

                {{-- Init Pop-up settings --}}
                <div class="col-lg-8 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h2 class="text-gray-900"><i class="fas fa-fw fa-cogs"></i>Pop-up settings</h2>
                        </div>
                        <div class="card-header bg-white py-3 mb-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pop-up settings</h6>
                        </div>
                        {{-- init Pop-up settings module 1 --}}
                        <div class="form-row atf-input mb-3">
                            <div class="form-group col-md-6">
                                <label class="form-check-label text-admin2-color font-weight-bold mb-2">Restriction
                                    mesaage</label>
                                <input type="text" class="form-control" onkeyup="changeButtonText(this.value)"
                                    id="restriction_message" name="restriction_message"
                                    value="{{ $get_data_pop_up_settings->pop_up_settings_model->restriction_message }}"
                                    autocomplete="off">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label text-admin2-color font-weight-bold mb-2">Cookie lifitime
                                    (in
                                    days)</label>
                                <input type="number" min="1" max="100"
                                    value="{{ $get_data_pop_up_settings->pop_up_settings_model->cookie_lifetime_in_days }}"
                                    class="form-control" id="cookie_lifetime_in_days" name="cookie_lifetime_in_days"
                                    autocomplete="off">
                            </div>
                        </div>
                        {{-- END Pop-up settings module 1 --}}
                        {{-- init Pop-up settings module 2 --}}
                        <div class="form-row atf-input mb-3">
                            <div class="form-group col-md-4">
                                <label class="form-check-label text-admin2-color font-weight-bold mb-2">Width
                                    (PX)</label>
                                <input type="number" min="1" max="1000"
                                    value="{{ $get_data_pop_up_settings->pop_up_settings_model->width }}"
                                    class="form-control" id="width" name="width" autocomplete="off">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-check-label text-admin2-color font-weight-bold mb-2">Border radius
                                    (PX)</label>
                                <input type="number" min="1" max="100"
                                    value="{{ $get_data_pop_up_settings->pop_up_settings_model->border_radius }}"
                                    class="form-control" id="border_radius" name="border_radius" autocomplete="off">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-check-label text-admin2-color font-weight-bold mb-2">Background
                                    Color</label>
                                <div class="row picker_position">
                                    <div class="col-1 panel-global" name="background_color" id="pop_background_color"
                                        style="background-color:{{ $get_data_pop_up_settings->pop_up_settings_model->background_color }}">
                                        <div class="col-2 color-picker"></div>
                                    </div>
                                    <input type="text" class="col-10 align-self-center atn-border"
                                        name="background_color" id="result_pop_background_color"
                                        value="{{ $get_data_pop_up_settings->pop_up_settings_model->background_color }}"
                                        autocomplete="off">
                                </div>
                            </div>
                        </div>
                        {{-- end init Pop-up settings module 2 --}}
                        {{-- init Pop-up settings module 3 --}}
                        <div class="form-row atf-input mb-3">
                            <div class="form-group col-md-6">
                                <label class="form-check-label text-admin2-color font-weight-bold mb-2">Border width
                                    (PX)</label>
                                <input type="number" min="1" max="100"
                                    value="{{ $get_data_pop_up_settings->pop_up_settings_model->border_width }}"
                                    class="form-control" id="border_width_test" name="border_width" autocomplete="off">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label text-admin2-color font-weight-bold mb-2">Border
                                    Color</label>
                                <div class="row picker_position">
                                    <div class="col-1 pop_border_color panel-global" name="border_color"
                                        id="pop_border_color"
                                        style="background-color:{{ $get_data_pop_up_settings->pop_up_settings_model->border_color }}">
                                        <div class="col-2 color-picker"></div>
                                    </div>
                                    <input type="text" class="col-10 align-self-center atn-border" name="border_color"
                                        id="result_border_color"
                                        value="{{ $get_data_pop_up_settings->pop_up_settings_model->border_color }}"
                                        autocomplete="off">
                                </div>
                            </div>
                        </div>
                        {{-- end Pop-up settings module 3 --}}
                        {{-- init Pop-up settings module 4 --}}
                        <div class="form-row atf-input mb-3">
                            <div class="form-group col-md-6">
                                <label class="form-check-label text-admin2-color font-weight-bold mb-2">Top and bottom
                                    padding
                                    (PX)</label>
                                <input type="number" min="1" max="100"
                                    value="{{ $get_data_pop_up_settings->pop_up_settings_model->top_and_bottom_padding }}"
                                    class="form-control" id="top_bottom_padding" name="top_and_bottom_padding"
                                    autocomplete="off">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label text-admin2-color font-weight-bold mb-2">Left and right
                                    padding
                                    (PX)</label>
                                <input type="number" min="1" max="100"
                                    value="{{ $get_data_pop_up_settings->pop_up_settings_model->left_and_right_padding }}"
                                    class="form-control" id="left_right_padding" name="left_and_right_padding"
                                    autocomplete="off">
                            </div>
                        </div>

                        {{-- image baner --}}
                        <div class="form-row col-md-12 atf-contend-image">
                            <figure class="text-center" id="dvOcultar_visual" style="margin: 0 !important;">
                                <img src="{{ $get_data_pop_up_settings->pop_up_settings_model->upload_visual !== '' ? asset('images/' . $get_data_pop_up_settings->pop_up_settings_model->upload_visual) : $get_data_pop_up_settings->pop_up_settings_model->upload_visual }} "
                                    class="image-atf mb-3" id="image-visual-form">
                                <figcaption id="file-name" style="display: none;"></figcaption>
                            </figure>
                            <input class="mb-3" type="file" id="upload-button" value="" name="upload_visual"
                                accept=".png,.jpg,.jpeg">
                            <input name="upload_visual_value" type="hidden"
                                value="{{ $get_data_pop_up_settings->pop_up_settings_model->upload_visual }}">
                            <label class="btn atf-botton btn-lg btn-outline-primary mb-2" for="upload-button">Upload Image
                            </label>
                            <div class="py-3">
                                <div class="custom-control custom-switch">
                                    <label>Disabled</label>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
                                    <input type="hidden" class="custom-control-input" value="0"
                                        name="disabled_enabled_visual" <?php if ($get_data_pop_up_settings->pop_up_settings_model->disabled_enabled_visual) { ?>checked="checked"
                                        <?php } ?>>
                                    <input type="checkbox" class="custom-control-input disabled" value="1"
                                        name="disabled_enabled_visual" id="customSwitch1"
                                        <?php if ($get_data_pop_up_settings->pop_up_settings_model->disabled_enabled_visual) { ?>checked="checked" <?php } ?>>
                                    <label class="custom-control-label" for="customSwitch1">Enabled</label>
                                    &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
                                    <label class="form-check-label">Recommended size: 100x100 px</label>
                                </div>
                            </div>
                        </div>

                        {{-- end image banner   --}}

                        <div class="card-header bg-white mb-3"></div>

                        {{-- background image --}}
                        <div class="form-row col-md-12 atf-contend-image">
                            <figure class="text-center" id="dvOcultar_banner" style="margin: 0 !important;">
                                <img src="{{ $get_data_pop_up_settings->pop_up_settings_model->upload_banner !== '' ? asset('images_baner/' . $get_data_pop_up_settings->pop_up_settings_model->upload_banner) : $get_data_pop_up_settings->pop_up_settings_model->upload_banner }}"
                                    class="image-atf mb-3" id="image-background-form">
                                <figcaption id="file-name-back" style="display: none;"></figcaption>
                            </figure>
                            <input class="mb-3" type="file" id="upload-button-back" value=""
                                name="upload_banner" accept=".png,.jpg,.jpeg">
                            <input name="upload_banner_value" type="hidden"
                                value="{{ $get_data_pop_up_settings->pop_up_settings_model->upload_banner }}">
                            <label class="btn atf-botton btn-lg btn-outline-primary mb-2" for="upload-button-back">Upload
                                Background Image
                            </label>
                            <div class="py-3">
                                <div class="custom-control custom-switch">
                                    <label>Disabled</label>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
                                    <input type="hidden" class="custom-control-input" value="0"
                                        name="disabled_enabled_banner" <?php if ($get_data_pop_up_settings->pop_up_settings_model->disabled_enabled_banner) { ?>checked="checked"
                                        <?php } ?>>
                                    <input type="checkbox" class="custom-control-input disabled_1" value="1"
                                        name="disabled_enabled_banner" id="customSwitch2"
                                        <?php if ($get_data_pop_up_settings->pop_up_settings_model->disabled_enabled_banner) { ?>checked="checked" <?php } ?>>
                                    <label class="custom-control-label" for="customSwitch2">Enabled</label>
                                    &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
                                    <label class="form-check-label">Recommended size: 1600x1600 px</label>
                                </div>
                            </div>
                        </div>
                        {{-- END background image --}}
                        <div class="card-header bg-white mb-3"></div>
                        {{-- end Pop-up settings module 4 --}}

                        {{-- init Pop-up settings module 5 --}}
                        <div class="form-row atf-input py-3">
                            <div class="form-group col-md-6">
                                <label class="form-check-label text-admin2-color font-weight-bold mb-2">Background
                                    Color</label>
                                <div class="row picker_position">
                                    <div class="col-1 panel-global" name="banner_background_color" id="image_background"
                                        style="background-color:{{ $get_data_pop_up_settings->pop_up_settings_model->banner_background_color }};">
                                        <div class="col-2 color-picker"></div>
                                    </div>
                                    <input type="text" class="col-10 align-self-center atn-border"
                                        name="banner_background_color" id="result_image_background"
                                        value="{{ $get_data_pop_up_settings->pop_up_settings_model->banner_background_color }}"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-check-label text-admin2-color font-weight-bold mb-2">Background color
                                    opacity</label>
                                <input type="number" oninput="set_color(this)" min="0" max="255"
                                    step="5" id="banner_background_opacity" name="banner_background_color_opacity"
                                    value="{{ $get_data_pop_up_settings->pop_up_settings_model->banner_background_color_opacity }}"
                                    class="form-control">
                            </div>
                        </div>
                        {{-- end Pop-up settings module 5 --}}
                    </div>
                </div>
                {{-- INIT Set Up Geographical Restrictions --}}
                <div class="col-lg-8">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="form-row atf-input">
                                <div class="form-group col-md-9 atf-margin-title-sections">
                                    <h2 class="text-gray-900"><i class="fas fa-fw fa-cogs"></i>Advanced Set Up
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="form-row atf-input mb-2">
                            <div class="form-group col-md-4 py-4">
                                <label class="form-check-label text-admin2-color font-weight-bold mb-2">set up
                                    geographical restrictions</label>
                                <p>apart from standard age restriction, you can more specific country based restrictions</p>
                            </div>
                            <textarea class="countries" hidden>{{ json_encode($selected_country_string) }}</textarea>
                            <div class="form-group col-md-8 py-4 ">
                                <div class="panel-rows">
                                    @php $countries = $get_data_restriction_country->restriction_country_model @endphp
                                    @foreach ($countries as $key => $countrie)
                                    
                                    <div class="col-lg-12 form-row rows-country">
                                            <div class="form-group col-md-7">
                                                <label
                                                class="form-check-label text-admin2-color font-weight-bold mb-2">Select
                                                Country</label>
                                                <div class="input-group mb-3">
                                                    <select class="selectpicker country" multiple data-live-search="true" name="data[{{ $key + 1}}][country][]">
                                                        @foreach ($selected_country_string as $option)
                                                            <option value="{{ $option }}" @if (in_array($option , explode(",", $countrie["country"]))) selected @endif> {{ $option }}</option>;
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="form-check-label text-admin2-color font-weight-bold mb-2">Entry Age</label>
                                                <input type="number" class="form-control age" required min="15" max="120" name="data[{{ $key + 1 }}][age]" value={{ $countrie["age"]}}>
                                            </div>
                                            <div class="form-group col-md-1">
                                                <button class="atf-button-delete" id="delete-user" title="delete">
                                                    <i class="fa-solid fa-trash fa-lg icon-delete" style="color: #ea4850; margin-top: 14px;"></i>
                                                </button>
                                            </div>
                                            <input type="hidden" class="form-control id" id='' name="data[{{ $key + 1 }}][id]" value={{ $countrie["id"]}}>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="form-row col-lg-12" style="margin-right: 5px !important;">
                                    <div class="input-group-append col-md-4 mb-2" style="height: max-content;">
                                        <a href="javascript:void(0)" class="input-group-text"
                                            style="text-decoration:none; cursor: pointer;"
                                            onclick="myFunction_test('gavy_test')">+ Add more countries</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-header bg-white mb-3"></div>
                        <div class="form-row atf-input mb-3">
                            <div class="form-group col-md-4">
                                <label class="form-check-label text-admin2-color font-weight-bold mb-2">monthly
                                    analysis</label>
                                <p>Our monthly analysis emails will keep you up to date on your store's success whit our app
                                </p>
                            </div>
                            <div class="form-group col-md-8 py-3">
                                <div class="form-group col-md-12">
                                    {{-- <div class="card">
                                            <div class="input-group atf_monthly">
                                                    <div class="atf_monthly_emails input-group-text">
                                                        <input type="checkbox"
                                                            aria-label="Checkbox for following text input">
                                                    </div>
                                                <p class="card-text atf_monthly_p">With supporting text below as a natural lead-in to
                                                    additional content.</p>
                                            </div>
                                        </div> --}}
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text atf_monthly_emails"
                                                style="border-right: none!important;">
                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                            </div>
                                        </div>
                                        <p class="form-control atf_monthly" style="border-left: none!important;">With
                                            supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- END Set Up Geographical Restrictions --}}
                </div>
                <button type="submit" id="at_create_edit_widgets" class="btn btn-primary" style="display:none"
                    value="">save</button>
        </form>
    </div>
@endsection