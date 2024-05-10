@foreach ($a as $key => $object)
<div class="col-lg-12 form-row">
    <div class="form-group col-md-7">
        <label
        class="form-check-label text-admin2-color font-weight-bold mb-2">Select
        Country</label>
        <div class="input-group mb-3">
            <select class="selectpicker" multiple data-live-search="true" id='' name="country[countries-'+ {{ $key }} +'][][name]">
                @foreach ($selected_country_string as $option)
                    <option value="{{ $option }}" @if (in_array($option, array_column($object, 'name'))) selected @endif> {{ $option }}</option>;
                @endforeach
            </select>
        </div>
    </div>
    @foreach ($b as $test => $object_1 )
    <div class="form-group col-md-5">
        <label class="form-check-label text-admin2-color font-weight-bold">Entry Age</label>
            @foreach ($object_1 as $t_p )
            {{-- @php dd($b); @endphp --}}
            <input type="number" class="form-control" placeholder="" min="15" max="120" id='' name="age[ages-'+ {{ $test }}+'][][name]" value="{{$t_p['name']}}">
            @endforeach
            
            {{-- @foreach($drugItems as $drug => $d)
                {{ $d['drug_id'] }} // this will work
                @endforeach --}}
                {{-- @foreach ($b as $test)
                    <input type="number" class="form-control" placeholder="" min="15" max="120" id='age-"+ i +"' name='age[age-"+ i +"][][name]' value="{{$age}}">
                    @endforeach --}}
                </div>
                @endforeach
    </div>
@endforeach

     {{-- <div class="panel-rows">
                                    <div class="col-lg-12 form-row">
                                        <div class="form-group col-md-7">
                                            <label class="form-check-label text-admin2-color font-weight-bold mb-2">Select
                                                Country</label>
                                            <div class="input-group mb-3">
                                                <select class="selectpicker" multiple data-live-search="true" id="country"
                                                    name="name='country[countries-1][][name]'">
                                                    @foreach ($selected_country_string as $value)
                                                        <option value="{{ $value }}"
                                                            {{ $get_data_restriction_country->restriction_country_model->country == $value ? 'selected' : '' }}>
                                                            {{ $value }}
                                                        </option>;
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label class="form-check-label text-admin2-color font-weight-bold">Entry
                                                age</label>
                                            <input type="number" placeholder="Year(s)" oninput="set_color_1212(this)"
                                                min="17" max="120" id="age" name="age"
                                                value="{{ $get_data_restriction_country->restriction_country_model->age }}"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div> --}}