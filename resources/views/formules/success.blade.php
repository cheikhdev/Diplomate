@extends('layouts.app') 
    @section('content')
        <section>
            <div class="alert alert-success">
                <h6>Votre achat a été traité avec succès </h6>
                <p>Merci de faire confiance à nos services</p>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Details  du paiement</h5>
                </div>
                <div class="card-body">
                    <div>Numéro de la commande  <h6>{{$payment->order_number}}</h6></div>
                    <div>Nom Client  <h6>{{$payment->user_name}}</h6></div>
                    <div>Date du paiement  <h6>{{$payment->date_payment}}</h6></div>
                    <div>Email du client  <h6>{{$payment->user_email}}</h6></div>
                    <div>Telephone du client  <h6>{{$payment->user_phone}}</h6></div>
                    <!--div >
                        <table class="table-responsive">
                            <thead>
                                <tr>
                                    <th>Produit</th>
                                    <th>Quantite</th>
                                    <th>Prix unitaire</th>
                                </tr>

                            </thead>
                            <tbody>
                            @foreach($panniers as $pannier)
                                <tr>
                                    <td>{{$pannier->name}}</td>
                                    <td>{{$pannier->qty}}</td>
                                    <td>{{$pannier->price}}</td>
                                </tr>
                            @endforeach
                                
                            </tbody>
                            <tfoot>
                            
                            </tfoot>
                        </table>
                    </div-->
                </div>
                <div class="card-footer">
                    <div><a class="btn btn-success" href="{{$receipt_url}}">Télécharger votre facture</a></div>
                </div>
            </div>
        </section>

        

    @endsection