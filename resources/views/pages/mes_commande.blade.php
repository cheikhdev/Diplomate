@extends('layouts.app') 
    @section('content')
        <section>
            <div class="card">
                <div class="card-header">
                    <h5>Mes commandes</h5>
                </div>
                <div class="card p-3">
                        <?php
                            $i=0;
                        ?>
                    @foreach($orders as $order)
                        <div class="card-header m-2" id="header_order<?php echo$i ?>" style="cursor:pointer;">
                            
                            <div>Commande N° : <h6>{{$order->num_order}}</h6></div>
                            
                        </div>
                        <div class="card-body m-1" id="body_order<?php echo$i ?>" style="display:none;">
                            <p>Adresse de livraison : <h6>{{$order->Adresse_client}}</h6></p>
                            <p>Prix total payé : <h6>{{$order->prix_total}}</h6></p>
                        </div>
                        <?php
                            $i++;
                        ?>
                    @endforeach
                    
                </div>
            </div>
        </section>
        <script>
            
        </script>
    @endsection