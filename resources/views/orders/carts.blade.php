
    <!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>
    <div>
    <h1>DFGHJKLCCCCCC</h1>    
    <h1 style="text-align:center; color:green">
     ACHAT RAPIDE EN TROIS CLICS</h1>
        <h2 style= "color:black">Besoin de support ? Appelez le 33 827 27 27 ou 78 147 07 17</h1>
   
        <section class="cart_area pt-5">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Produit</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Quantite</th>
                            <th scope="col">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cart['products'] as $panier)
                            <tr>
                                <td scope="col">{{$panier['name_product']}}</td>
                                <td scope="col">{{$panier['prix_product']}}</td>
                                <td scope="col">{{$panier['quantite']}}</td>
                                <td scope="col">{{$panier['total']}}F CFA</td>
                            </tr>
                        @endforeach
                        <tr class="out_button_area">
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                                <div class="checkout_btn_inner d-flex align-items-center">
                                    <a class="btn btn-primary" href="{{ url('achat1') }}">Confirmer la commande</a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

   
    <div id="main" class="row">

        @yield('content')

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>

    
    
    
