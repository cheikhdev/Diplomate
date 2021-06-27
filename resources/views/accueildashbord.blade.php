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
							<div class="col-xl-12">
                      <!-- Sales Graph -->
                      <div class="card card-default" data-scroll-height="675">
                        <div class="card-header">
                          
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                  <th>Nom</th>
                                  <th>Prenom</th>
                                  <th>Adresse</th>
                                  <th>Telephone</th>
                                  <th>Email</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($clients as $users)
                                  <tr>
                                    <td>{{$users->client->nom_client}}</td>
                                    <td>{{$users->client->prenom_client}}</td>
                                    <td>{{$users->client->adresse_client}}</td>
                                    <td>{{$users->client->telephone_client}}</td>
                                    <td>{{$users->email}}</td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
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
							
    @endsection