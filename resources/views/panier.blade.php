@extends('layouts.app')
  @section('content')
        <!-- Begin Page Content -->
   @if (session('success'))
    <h4 style="font-size: 24px;border: 1px solid black;text-align: center;color: #FFD700">{{session('success')}}</h6>
  @endif

        <div id="show_pannier" class="" style="margin-top:25px;padding:5px;">

<!-- Page Heading -->
            <!-- DataTales Example -->
            @if(Cart::count())
                <div class="card   mb-4" style="width:100%;">
                    <div class="card-header">
                        <h1 class="mr-3" style="text-align: center;">Details du panier</h1>
                    </div>
                    <div class="card-body">
                    
                        <div class="table-responsive">
                            <table id="myTable" class="table"                   style="overflow:hidden; width:100%;">
                                <thead class=" table-dark">
                                    <tr>
                                        <th>Produit </th>
                                        <th>Mise a jour Quantite</th>
                                        <th>Prix</th>
                                        <th>Sous-total</th>
                                        
                                        <th>Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody class="mb-3" id="tbody_pannier ">
                                    <?php
                                        $i=0;
                                    ?>
                                    <form action="#" class="up-to-cart">
                                        {{csrf_field()}}
                                        @foreach(Cart::content() as $row)
                                            <tr id="tr<?php echo$i ?>" class="" data-href="" style="">
                                                <td style="font-weight: bold;">{{$row->name}}</td>
                                                <td class="d-flex justify-content-between">
                                                        <input  style="width:50px;" type="number" class="panier" id="quantite<?php echo$i ?>"  name="uqty<?php echo$i ?>" value="{{$row->qty}}" step="1" min="1">
                                                        <input type="hidden" name="rowId<?php echo$i ?>" value="{{$row->rowId}}">
                                                </td>
                                                <td style="font-weight:bold;font-size: 17px;">{{$row->price}} Fcfa <input type="hidden" id="price<?php echo$i ?>" value="{{$row->price}}"></td>
                                                <td id="total<?php echo$i ?>" style=" font-weight:bold;">{{$row->total}} Fcfa</td>
                                                <input type="hidden" id="sous_total<?php echo$i ?>" value="{{$row->total}}">
                                                <td>
                                                    <p><button class="btn btn-danger" id="btn_delete<?php echo$i ?>"><i class="fas fa-trash-alt"></i>
                                                    <input type="hidden" id="delete<?php echo$i ?>" value="{{$row->rowId}}"></button></p>
                                                </td>
                                            </tr>
                                            <?php
                                                $i=$i+1;
                                            ?>
                                        @endforeach
                                        <tr id="total_cart">
                                            <td colspan="" style="color:red;text-align:left;">
                                            <b>TOTAL :</b></td>
                                            <td colspan="" id="price_total" style="color:red; font-weight:bold;font-size: 17px;" >{{Cart::total()}} Fcfa</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"> 
                                                <button  id="updcart" class="update-disable" disabled="true" style=""> Mise à jour panier</button>
                                            </td> 
                                        </tr> 
                                    </form>
                                    
                                </tbody>
                                
                                
                            </table>
                            @if (session('danger'))
                                 <div class="alert alert-danger">{{session('danger')}}</div>
                            @endif
                            <div class="" id="info_update"></div>
                            <div class="d-flex justify-content-between">
                                <button>
                                    <a href="{{('/home')}}" id="vider" style="font-weight:bold;">Retour à l'acceuil</a>
                                </button>
                                <button>
                                    <a href="/finish_cart" class="" id="valid_commande" style="font-weight:bold;">Valider la commande</a>
                                </button>
                                
                            </div>
                        </div>
                </div>
            @else
                <div class="card   mb-4" style="width:100%;">
                    <div class="card-header">
                        <h1 class="mr-3" style="text-align: center;">Le pannier est vide</h1>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('images/pannier-grand.png')}}" alt="">
                        </div>
                    </div>
                </div>  
            @endif

    </div>
</div>

            
@endsection
