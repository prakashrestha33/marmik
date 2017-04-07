<div class="row" align="center">
    <div class="col-md-12">
        <div class="box" style="padding: 10px">
            <div class="box-header">
                <h3 class="box-title">ADVANCE MARKETING PVT. LTD. </h3>
            </div>
            <div class="pad" align="left">
                <div class="row">
                    <label class="col-sm-6 "> Distributor Name:</label>
                    <p>{{$billings->id}}</p>
                </div>
                <div class="row">
                    <label class="col-sm-6 ">Product type:</label>
                </div>
                <div class="row">
                    <label class="col-sm-6 ">Quantity:</label>
                </div>
                <div class="row">
                    <label class="col-sm-6 ">Price:</label>
                </div>

                <div class="row">
                    <label class="col-sm-6 ">Ordered Date:</label>
                </div>
                <h3>Address</h3>

                <div class="col-md-5 col-md-offset-3">
                    <div class="row">
                        <label class="col-sm-6 ">Zone:</label>
                    </div>
                    <div class="row">
                        <label class="col-sm-6 ">District:</label>
                    </div>
                    <div class="row">
                        <label class="col-sm-6 ">City:</label>
                    </div>
                    <div class="row">
                        <label class="col-sm-6 ">Mobile:</label>
                    </div>
                    <div class="row">
                        <label class="col-sm-6 ">Phone:</label>
                    </div>
                </div>
            </div>
            <br>
            <br>


            {{--<table   align="left" style="width:100%">--}}

                    {{--<tr>--}}
                        {{--<th>Gross Total:</th>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<th>Discount:</th>--}}
                        {{--<td> {{$ob->discount}}%</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<th>VAT:</th>--}}
                        {{--<td>{{$ob->vat}}%</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<th> Shipping Charge:</th>--}}
                        {{--<td> Rs. {{number_format($ob->shipping_charge, 2)}}</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<th>Grand Total :</th>--}}
                        {{--<td> Rs. {{number_format($ob->grand_total, 2)}}</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<th> Bill Created At:</th>--}}
                        {{--<td> {{$ob->created_at}}</td>--}}
                    {{--</tr>--}}

                {{--@endforeach--}}

            {{--</table>--}}
        </div>
    </div>
</div>