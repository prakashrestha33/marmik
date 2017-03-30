@extends('layouts.app')
@section('content')
<div class="container">
    {{$pickup}}
    <h5 align="left" style="margin-top: 30px">Checkout</h5>
    <div class="row">
        <table>
            <thead>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$pickup->package_id}} Shipment</td>
                <td>1</td>
                <td>$2.9</td>
            </tr>
            <tr>
                <td>Shipment Cost</td>
                <td>1</td>
                <td>$4</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="row" style="padding-top: 60px">
        <div class="col s7">

        </div>
        <div class="col s5">
            <table>
                <tbody>
                <tr>
                    <td>Subtotal</td>
                    <td>$10</td>
                </tr>
                <tr>
                    <td>Staff Charge</td>
                    <td>$2</td>
                </tr>
                <tr style="font-style: italic">
                    <td>Total</td>
                    <td>$12</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="input field col s12 m12" align="right">
        <a class="waves-effect yellow darken-4 btn"><i class="material-icons right">done_all</i>Done</a>
    </div>
</div>
    @endsection
