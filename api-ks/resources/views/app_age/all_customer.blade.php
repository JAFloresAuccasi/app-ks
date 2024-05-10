@extends('layouts.layouts')
@section('title', 'Age Test')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Customers</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Customer Database</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Shop Url</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Shop Url</th>
                            <th>Created At</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($customer as $data_customer)
                        <tr>
                            <td>{{$data_customer->id}}</td>
                            <td>
                                <a style="text-decoration:none;" href="{{route('edit_customer', $data_customer->id)}}" title="View Customer">{{$data_customer->shop_url}}</a>
                            </td>
                            <td>{{$data_customer->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

<?php
// $a = json_decode($get_data_restriction_country->restriction_country_model->country);
// $concat = '';
// foreach ($a as $key => $value) {
//     foreach ($value as $keys => $values) {

//      $concat = $concat."<div class='col-lg-12 form-row'> " + '\n' +
//             "<div class='form-group col-md-7'>" + '\n' +
//                 "<label class='form-check-label text-admin2-color font-weight-bold mb-2'>Select Country</label> " + '\n' +
//                 "<div class='input-group mb-3'> " + '\n' +
//                     "<select class='selectpicker' multiple data-live-search='true' id='country-0' name='country[countries-0][][name]'>" +"</select>" + '\n' +
//                 "</div>" + '\n' +
//             "</div>" + '\n' +
//             "<div class='form-group col-md-5'>"+ '\n' +
//                 "<label class='form-check-label text-admin2-color font-weight-bold'>Entry Age</label>"+ '\n' +
//                 "<input type='number' class='form-control' placeholder='Year(s)' 'min='15' max='120' id='age-"+ i +"' name='age[age-"+ i +"][][age]' value='"+ ages +"'>"+ '\n' +
//             "</div>"+ '\n' +
//         "</div>");
//         $concat = $concat . json_encode($values->name) . ',';
//     };
// };
?>