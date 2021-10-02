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
                                    <div class="stat-digit"> <i class="fa fa-usd"></i>{{$user}}</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card bg-primary">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Asset</div>
                                    <div class="stat-digit"> <i class="fa fa-usd"></i>{{$asset}}</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card bg-success">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Purchase</div>
                                    <div class="stat-digit"> <i class="fa fa-usd"></i> {{$purchase}}</div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card bg-info">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Category</div>
                                    <div class="stat-digit"> <i class="fa fa-usd"></i>{{$category}}</div>
                                </div>
                                
                            </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                        <div class="card bg-danger">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Stock</div>
                                    <div class="stat-digit"> <i class="fa fa-usd"></i>{{$stocks}}</div>
                                </div>
                               
                            </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                        <div class="card bg-warning">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Allocated Asset</div>
                                    <div class="stat-digit"> <i class="fa fa-usd"></i>{{$allocation}}</div>
                                </div>
                              
                            </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-sm-6">
                        <div class="card bg-primary">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Repair</div>
                                    <div class="stat-digit"> <i class="fa fa-usd"></i>{{$repairs}}</div>
                                </div>
                              
                            </div>
                        </div>
                     </div>
                    
                     <div class="col-lg-3 col-sm-6">
                        <div class="card bg-secondary">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Supplier</div>
                                    <div class="stat-digit"> <i class="fa fa-usd"></i>{{$supplier}}</div>
                                </div>
                                
                            </div>
                        </div>
                     </div>

                </div>


           
@endsection