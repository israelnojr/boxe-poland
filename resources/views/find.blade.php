@extends('layouts.frontend.layout')
@section('content')
    @include('breadcrumb')
    <!-- Service part start-->
    <section class="service_part single_page_service">
        <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-item-center justify-content-between">
                      <h3 class="card-title">Package Infomation</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
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