@extends('layouts.appdashbord')
    @section('content')
          <div class="content">						 
                  <!-- Top Statistics -->
                  <div class="row">
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini  mb-4">
                        <div class="card-body">
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          
                        </div>
                      </div>
                    </div>
                  </div>
                	<div class="row">
							<div class="col-xl-8 col-md-12">
                      <!-- Sales Graph -->
                      <div class="card card-default" data-scroll-height="675">
                        <div class="card-header">
                          
                        </div>
                        <div class="card-body">
                          
                        </div>
                        <div class="card-footer d-flex flex-wrap bg-white p-0">
                          <div class="col-6 px-0">
                            
                          </div>
                          <div class="col-6 px-0">
                            <div class="text-center p-4 border-left">
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
							<div class="col-xl-4 col-md-12">
                  <!-- Doughnut Chart -->
                  <div class="card card-default" data-scroll-height="675">
                    <div class="card-header justify-content-center">
                      
                    </div>
                    <div class="card-body" >
                      <canvas id="doChart" ></canvas>
                    </div>
                    <a href="#" class="pb-5 d-block text-center text-muted"><i class="mdi mdi-download mr-2"></i> Download overall report</a>
                    <div class="card-footer d-flex flex-wrap bg-white p-0">
                      <div class="col-6">
                        <div class="py-4 px-4">
                          
                        </div>
                      </div>
                      <div class="col-6 border-left">
                        <div class="py-4 px-4 ">
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
    @endsection