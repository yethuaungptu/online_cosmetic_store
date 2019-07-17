@include('nav2');

<style>
    #invoice{
        padding: 30px;
    }

    .invoice {
        position: relative;
        background-color: #FFF;
        min-height: 680px;
        padding: 15px
    }

    .invoice header {
        padding: 10px 0;
        margin-bottom: 20px;
        border-bottom: 1px solid #3989c6
    }

    .invoice .company-details {
        text-align: right
    }

    .invoice .company-details .name {
        margin-top: 0;
        margin-bottom: 0
    }

    .invoice .contacts {
        margin-bottom: 20px
    }

    .invoice .invoice-to {
        text-align: left
    }

    .invoice .invoice-to .to {
        margin-top: 0;
        margin-bottom: 0
    }

    .invoice .invoice-details {
        text-align: right
    }

    .invoice .invoice-details .invoice-id {
        margin-top: 0;
        color: #3989c6
    }

    .invoice main {
        padding-bottom: 50px
    }

    .invoice main .thanks {
        margin-top: -100px;
        font-size: 2em;
        margin-bottom: 50px
    }

    .invoice main .notices {
        padding-left: 6px;
        border-left: 6px solid #3989c6
    }

    .invoice main .notices .notice {
        font-size: 1.2em
    }

    .invoice table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 20px
    }

    .invoice table td,.invoice table th {
        padding: 15px;
        background: #eee;
        border-bottom: 1px solid #fff
    }

    .invoice table th {
        white-space: nowrap;
        font-weight: 400;
        font-size: 16px
    }

    .invoice table td h3 {
        margin: 0;
        font-weight: 400;
        color: #3989c6;
        font-size: 1.2em
    }

    .invoice table .qty,.invoice table .total,.invoice table .unit {
        text-align: right;
        font-size: 1.2em
    }

    .invoice table .no {
        color: #fff;
        font-size: 1.6em;
        background: #3989c6
    }

    .invoice table .unit {
        background: #ddd
    }

    .invoice table .total {
        background: #3989c6;
        color: #fff
    }

    .invoice table tbody tr:last-child td {
        border: none
    }

    .invoice table tfoot td {
        background: 0 0;
        border-bottom: none;
        white-space: nowrap;
        text-align: right;
        padding: 10px 20px;
        font-size: 1.2em;
        border-top: 1px solid #aaa
    }

    .invoice table tfoot tr:first-child td {
        border-top: none
    }

    .invoice table tfoot tr:last-child td {
        color: #3989c6;
        font-size: 1.4em;
        border-top: 1px solid #3989c6
    }

    .invoice table tfoot tr td:first-child {
        border: none
    }

    .invoice footer {
        width: 100%;
        text-align: center;
        color: #777;
        border-top: 1px solid #aaa;
        padding: 8px 0
    }

    @media print {
        .invoice {
            font-size: 11px!important;
            overflow: hidden!important
        }

        .invoice footer {
            position: absolute;
            bottom: 10px;
            page-break-after: always
        }

        .invoice>div:last-child {
            page-break-before: always
        }
    }
</style>
<script src="{{ asset('js/print.min.js') }}"></script>
<div class="container">
    <ul class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{ url('/customer/cartview') }}">Shopping Cart</a></li>
        <li><a href="{{ url('/customer/checkout') }}">Checkout</a></li>
    </ul>
    @if(session('customer_key') && \App\Order::where('customer_id',session('customer_key')[0][1]))
    <div class="row">
        <div id="invoice">

            <div class="toolbar hidden-print">
                <div class="text-right">
                    <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
                </div>
                <hr>
            </div>
            <div class="row">
            <div class="col-sm-4 company-details">
                <h2 class="name">
                    <a target="_blank" href="#">
                        KBZ
                    </a>
                </h2>
                <div>Myo Thiri</div>
                <div> <span class="bg-primary">Account No</span> 1234567890123</div>
            </div>
            <div class="col-sm-4 company-details">
                <h2 class="name">
                    <a target="_blank" href="#">
                        AYA
                    </a>
                </h2>
                <div>Nan Thiri</div>
                <div><span class="bg-danger">Account No</span> 1234567890123</div>
            </div>
                <div class="col-sm-4 company-details">
                    <h2 class="name">
                        <a target="_blank" href="#">
                            CB
                        </a>
                    </h2>
                    <div>Hnin Htet Htet Nay Nwe</div>
                    <div><span class="bg-info">Account No</span> 1234567890123</div>
                </div>
            </div>
            <div class="invoice overflow-auto" id="printArea">
                <div style="min-width: 600px">
                    <header>
                        <div class="row">
                            <div class="col">
                                <a target="_blank" href="#">
                                    <img src="{{ asset('image/logo.png') }}" data-holder-rendered="true" class="img-thumbnail img-responsive"/>
                                </a>
                            </div>
                            <div class="col company-details">
                                <h2 class="name">
                                    <a target="_blank" href="#">
                                        Three Lady
                                    </a>
                                </h2>
                                <div>No7. Yal Pu San Street, Aung Chan Thar Quart, Pyay</div>
                                <div>(123) 456-789</div>
                                <div>threelady@example.com</div>
                            </div>
                        </div>
                    </header>
                    <main>
                        <div class="row contacts">
                            <div class="col invoice-to">
                                <div class="text-gray-light">INVOICE TO:</div>
                                <h2 class="to">{{ \App\Order::where('customer_id',session('customer_key')[0][1])->latest('created_at')->get()[0]['name'] }}</h2>
                                <div class="address">{{ \App\Order::where('customer_id',session('customer_key')[0][1])->latest('created_at')->get()[0]['address'] }}</div>
                                <div class="email"><a href="#">{{ \App\Customer::find(session('customer_key')[0][1])->phone }}</a></div>
                            </div>
                            <div class="col invoice-details">
                                <h1 class="invoice-id">INVOICE {{ \App\Order::where('customer_id',session('customer_key')[0][1])->latest('created_at')->get()[0]['id'] }}</h1>
                                <div class="date">Date of Invoice: {{ \App\Order::where('customer_id',session('customer_key')[0][1])->latest('created_at')->get()[0]['created_at'] }}</div>
{{--                                <div class="date">Due Date: 30/10/2018</div>--}}
                            </div>
                        </div>
                        <table border="0" cellspacing="0" cellpadding="0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th class="text-left">PRODUCT NAME</th>
                                <th class="text-left">CATEGORY</th>
                                <th class="text-right">PRICE</th>
                                <th class="text-right">QUANTITY</th>
                                <th class="text-right">TOTAL</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\App\Order::where('customer_id',session('customer_key')[0][1])->latest('created_at')->get()[0]['cart'] as $i=>$id)
                                <tr>
                                    <td class="no">{{ \App\Product::find($id['product_id'])->id }}</td>
                                    <td class="text-left">{{ \App\Product::find($id['product_id'])->name}}</td>
                                    <td class="text-left">{{ \App\Product::find($id['product_id'])->category->name}}</td>
                                    <td class="unit">{{ \App\Product::find($id['product_id'])->price}} Ks</td>
                                    <td class="qty">{{ $id['count']}}</td>
                                    <td class="total">{{ \App\Product::find($id['product_id'])->price * $id['count'] }} Ks</td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="3"></td>
                                <td colspan="2">SUBTOTAL</td>
                                <td>{{ \App\Order::where('customer_id',session('customer_key')[0][1])->latest('created_at')->get()[0]['total_price'] }} Ks</td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <td colspan="2">Shipping Fee (Not include)</td>
                                <td> 0 Ks</td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <td colspan="2">GRAND TOTAL</td>
                                <td>{{ \App\Order::where('customer_id',session('customer_key')[0][1])->latest('created_at')->get()[0]['total_price'] }} Ks</td>
                            </tr>
                            </tfoot>
                        </table>
                        <div class="thanks">Thank you!</div>
                        <div class="notices">
                            <div>NOTICE:</div>
                            <div class="notice">Shipping Fee will be pay when you take your delivery </div>
                        </div>
                    </main>
                    <footer>
                        Invoice was created on a computer and is valid without the signature and seal.
                    </footer>
                </div>
                <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                <div></div>
            </div>
        </div>

    </div>
        @else
        <h1 class="text-center text-info">Not Invoice Available</h1>
    @endif
</div>
</div>
<script>
    $('#printInvoice').click(function(){
        printJS({
            printable: 'printArea',
            type: 'html',
            targetStyles: ['*']
        })
    });
</script>

@include('footer')