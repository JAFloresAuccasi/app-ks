@extends('layouts.layouts')
@section('title', 'Age Test')
@section('content')
    <div class="container-fluid ATF_container-fluid">
        <p class="ATF-mb"></p>
        <nav class="col-lg-12 mb-4 test-1">
            <h2 class="text-gray-900">Quick View</h2>
            <p class="text-gray-600" style="font-size:1rem;">Easily enable your customers to view details and Add-to-Cart form
                of any product on any page.</p>
        </nav>
        <div class="d-sm-flex align-items-center justify-content-between mb-4"></div>
        <form role="form" method="POST" action="{{ route('save') }}" accept-charset="utf-8" enctype="multipart/form-data">
            @csrf
            <div class="row mb-4">
                <label class="col-sm-1 col-form-label text-gray-800">Customer</label>
                <div class="col-lg-7">
                    <input type="text" placeholder="" class="form-control" id="shop_url" name="shop_url"
                        autocomplete="off">
                </div>
            </div>
            <button type="submit" id="at_create_edit_widgets" class="btn btn-primary" style="display:none"
                value="">save</button>
        </form>
    </div>
@endsection