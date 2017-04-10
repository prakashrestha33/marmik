<div class="row" align="center">
        <div class="box" style="padding: 10px">

                <img src="asd.jpg" height="45px">
            <div class="box-header">

                <h2 class="box-title">POSTRACKER Billing</h2>
            </div>

            @foreach($billings as $bill)
                <div class="row">
                    <label class="col-sm-6 "> Receiver Address:</label>
                    &nbsp;&nbsp;&nbsp;&nbsp; {{$bill['receiver_address']}}
                </div>
                <div class="row">
                    <label class="col-sm-6 "> Receiver Contact:</label>
                    &nbsp;&nbsp;&nbsp;&nbsp; {{$bill['contact']}}
                </div>
                <div class="row">
                    <label class="col-sm-6 ">Pickup date:</label>
                    &nbsp;&nbsp;&nbsp;&nbsp; {{$bill['pickup_date']}}
                </div>
                <div class="row">
                    <label class="col-sm-6 ">Shipment type:</label>
                    &nbsp;&nbsp;&nbsp;&nbsp; {{$bill['shipment_type']}}
                </div>
                <div class="row">
                    <label class="col-sm-6 ">Package Type:</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;    {{$bill['package_id']}}

                </div>


                <h3>Estimated Bill</h3>

                    <table class="striped" style="padding-left: 100px; padding-top: 20px">
                        <thead>
                        <tr>
                            <th>&nbsp;&nbsp;&nbsp;&nbsp;Item</th>
                            <th>&nbsp;&nbsp;&nbsp;&nbsp;Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                            <td>Package: &nbsp;&nbsp;&nbsp;&nbsp;  {{$package->type}} </td>
                            <td id="textone"> &nbsp;&nbsp;&nbsp;&nbsp;${{$package->price}}</td>
                        </tr>
                        <tr>
                            <td>Shipment:  &nbsp;&nbsp;&nbsp;&nbsp;{{$ship_type->name}}</td>
                            <td  id="texttwo">
                                &nbsp;&nbsp;&nbsp;&nbsp;${{$ship_type->price}}
                            </td>
                        </tr>
                        </tbody>
                    </table>

                <div class="row" style="padding-left: 400px; padding-top: 20px">

                    <div class="col-md-6">
                        <table class="striped" >
                            <tbody>
                            <tr>
                                <td>Subtotal</td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;${{$ship_type->price +$package->price}}</td>
                            </tr>
                            <tr>
                                <td>Pickup Charge</td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;$20</td>
                            </tr>
                            <tr style="font-style: italic">
                                <td>Total</td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;${{20+$ship_type->price +$package->price}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            <br>
            <br>
            @endforeach


        </div>
</div>