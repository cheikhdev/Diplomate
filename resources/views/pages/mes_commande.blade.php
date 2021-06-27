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
                            <p>Prix total payé : <h6>{{$order->prix_total}} FR</h6></p>
                            <p>Nom : <h6>{{$order->prenom_client}} {{$order->nom_client}}</h6></p>
                            <p>Date : <h6>{{$order->created_at}}</h6></p>
                        </div>
                        <?php
                            $i++;
                        ?>
                    @endforeach
                    
                </div>
            </div>
        </section>
        <script>
                let order_headers = [];
                let order_bodies = [];
                let i=0;
                while (document.getElementById('header_order'+i)){
                    order_headers[i] = document.getElementById('header_order'+i);
                    order_bodies[i] = document.getElementById('body_order'+i);
                    i++;
                }

                for (let j = 0; j < order_headers.length; j++) {
                    order_headers[j].addEventListener('click', function(){
                        for (let k = 0; k < order_bodies.length; k++) {
                            order_bodies[k].style.display="none";   
                        }
                        order_bodies[j].style.display="block";
                    });
                    
                }
        </script>
    @endsection