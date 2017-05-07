@extends('layouts.app')
@section('content')

    <ul id="slide-out" class="side-nav" style="margin-top: 50px; margin-right: 250px">
        <li>
            <div class="userView">
                <div class="background" style="background-color: #3949ab">
                </div>
                <a href="#!user"><img class="circle" src="{{ asset('image/person-flat.png')}}"></a>
                <a href="#!name"><span class="white-text name">{{ Auth::user()->name }}</span></a>
                <a href="#!email"><span class="white-text email">{{ Auth::user()->email }}</span></a>
            </div></li>
        <li><a href="/package/track" class="waves-effect"><i class="material-icons">shopping_cart</i>Track Package</a></li>
        <li><a href="/package/pickup" class="waves-effect"><i class="material-icons">redeem</i>Request Pickup</a></li>
        <li><a href="/package/lost" class="waves-effect"><i class="material-icons">search</i>Lost Packages</a></li>
        <li><div class="divider"></div></li>
    </ul>

    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons small">menu</i></a>

    <div class="container">
{{--{{$pickup}}--}}
    <h5 align="left" style="margin-top: 30px">Checkout</h5>
    <div class="row">
        <table class="striped">
            <thead>
            <tr>
                <th>Item</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            <tr>

                <td>Package:  {{$package->type}} </td>
                <td id="textone">${{$package->price}}</td>
            </tr>
            <tr>
                <td>Shipment:  {{$ship_type->name}}</td>
                <td  id="texttwo">
                    {{$ship_type->price}}


                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="row" style="padding-top: 60px">
        <div class="col s7">

        </div>


        <div class="col s5">
            <table class="highlight">
                <tbody>
                <tr>
                    <td>Subtotal</td>
                    <td>${{$ship_type->price +$package->price}}</td>
                </tr>
                <tr>
                    <td>Pickup Charge</td>
                    <td>$20</td>
                </tr>
                <tr style="font-style: italic">
                    <td>Total</td>
                    <td>${{20+$ship_type->price +$package->price}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="input field col s12 m12" align="right">
        <a class="waves-effect waves-light btn yellow darken-4 btn" href="/profile/{{$pickup->customer_id}}/history"><i class="material-icons right">done_all</i>Done</a>
    </div>

{{--        {{$pickup}}--}}
    {!! Html::linkRoute('GetPdf',' Pdf',array($pickup->id),array('class'=>' btn btn-primary fa fa-file-pdf-o', 'title'=>"View pdf")) !!}
</div>
@endsection
