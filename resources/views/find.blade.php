@extends('layouts.frontend.layout')
@section('content')
    @include('breadcrumb')
    <!-- Service part start-->
    <section class="service_part single_page_service">
        <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Sender Informations</h5>
                    <p class="card-text"> <strong>Sender Name:</strong> <span>{{$shippments->shipperName}}</span> </p>
                    <p class="card-text"> <strong>Sender Phone No.:</strong> <span>{{$shippments->shipperNum}}</span> </p>
                    <p class="card-text"> <strong>Sender Address:</strong> <span>{{$shippments->shipperAddress}}</span> </p>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Receiver Informations</h5>
                    <p class="card-text"> <strong>Receiver Name:</strong> <span>{{$shippments->recieverName}}</span> </p>
                    <p class="card-text"> <strong>Receiver Phone No.:</strong> <span>{{$shippments->recieverNum}}</span> </p>
                    <p class="card-text"> <strong>Receiver Address:</strong> <span>{{$shippments->recieverAddress}}</span> </p>
                </div>
                </div>
            </div>
            </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-item-center justify-content-between">
                      <h3 class="card-title">Package Infomation</h3>
                    </div>
                    <!-- /.card-header -->
                <div class="card-body table-responsive p-0 mb-3">
                    <table class="table table-borderless ">
                        <thead>
                            <tr>
                            <th scope="col">Option</th>
                            <th scope="col">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Package Type</th>
                                <td colspan="2">{{$shippments->type}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Package weight</th>
                                <td colspan="2">{{$shippments->weight}}kg</td>
                            </tr>

                            <tr>
                                <th scope="row">Package Departure</th>
                                <td colspan="2">{{$shippments->departure}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Package Destination</th>
                                <td colspan="2">{{$shippments->destination}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Possible Pickup Date</th>
                                <td colspan="2">{{$shippments->pickupDate}}</td>
                            </tr>
                        </tbody>
                    </table>
                               
                    <table class="table  table-borderless table-dark">
                    <thead >
                        <tr>
                            <th>Track Id</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Remark</th>
                            <th>Date / Time</th>
                        </tr>
                    </thead>

                    <tbody>
                      @foreach($infos as $info)
                        <tr>
                            <td>{{$info->trackId}}</td>
                            <td>{{$info->location}}</td>
                            <td>{{$info->status}}</td>
                            <td>{{$info->remark}}</td>
                            <td>{{$info->created_at}}</td>
                        </tr>
                      @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Service part end-->
    @include('cta')
@endsection
