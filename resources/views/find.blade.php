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
                    @forelse($shippments as $shippment)
                        <p class="card-text"> <strong>Sender Name:</strong> <span>{{$shippment->shipperName}}</span> </p>
                        <p class="card-text"> <strong>Sender Name:</strong> <span>{{$shippment->shipperNum}}</span> </p>
                        <p class="card-text"> <strong>Sender Name:</strong> <span>{{$shippment->shipperAddress}}</span> </p>
                    @empty
                        <p class="card-text">No Shippment available</p>
                    @endforelse
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Receiver Informations</h5>
                    @forelse($shippments as $shippment)
                        <p class="card-text"> <strong>Receiver Name:</strong> <span>{{$shippment->recieverName}}</span> </p>
                        <p class="card-text"> <strong>Receiver Name:</strong> <span>{{$shippment->recieverNum}}</span> </p>
                        <p class="card-text"> <strong>Receiver Name:</strong> <span>{{$shippment->recieverAddress}}</span> </p>
                    @empty
                        <p class="card-text">No Shippment available</p>
                    @endforelse
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
                        @foreach($shippments as $package)
                        <thead>
                            <tr>
                            <th scope="col">Option</th>
                            <th scope="col">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Package Type</th>
                                <td colspan="2">{{$package->type}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Package weight</th>
                                <td colspan="2">{{$package->weight}}kg</td>
                            </tr>

                            <tr>
                                <th scope="row">Package Departure</th>
                                <td colspan="2">{{$package->departure}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Package Destination</th>
                                <td colspan="2">{{$package->destination}}</td>
                            </tr>

                            <tr>
                                <th scope="row">Possible Pickup Date</th>
                                <td colspan="2">{{$package->pickupDate}}</td>
                            </tr>
                        </tbody>
                        @endforeach
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