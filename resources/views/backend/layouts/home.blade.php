@extends('backend.master')
@section('content')
<div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card bg-secondary">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total User</div>
                                    <div class="stat-digit"> {{$user}}</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card bg-primary">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Asset</div>
                                    <div class="stat-digit"> {{$asset}}</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card bg-success">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Purchase</div>
                                    <div class="stat-digit">  {{$purchase}}</div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card bg-info">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Category</div>
                                    <div class="stat-digit"> {{$category}}</div>
                                </div>
                                
                            </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                        <div class="card bg-danger">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Stock</div>
                                    <div class="stat-digit">{{$stocks}}</div>
                                </div>
                               
                            </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                        <div class="card bg-warning">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Allocated Asset</div>
                                    <div class="stat-digit">{{$allocation}}</div>
                                </div>
                              
                            </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                        <div class="card bg-primary">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Repair</div>
                                    <div class="stat-digit"> </i>{{$repairs}}</div>
                                </div>
                              
                            </div>
                        </div>
                     </div>
                    
                     <div class="col-lg-3 col-sm-6">
                        <div class="card bg-secondary">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Supplier</div>
                                    <div class="stat-digit"> {{$supplier}}</div>
                                </div>
                                
                            </div>
                        </div>
                     </div>

                </div>


           
@endsection