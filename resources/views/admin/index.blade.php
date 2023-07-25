@extends('admin.admin_master')
@section('admin')


<div class="page-content">
<div class="container-fluid">

<!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box d-sm-flex align-items-center justify-content-between">
    <h4 class="mb-sm-0">Dashboard</h4>

    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Stockify</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>

</div>
</div>
</div>
<!-- end page title -->

<div class="row">
<div class="col-xl-3 col-md-6">
<div class="card">
    <div class="card-body">
        <div class="d-flex">
            <div class="flex-grow-1">
                <p class="text-truncate font-size-14 mb-2">Total Customers</p>
                <h4 class="mb-2">{{ $counts['customers'] }}</h4>
            </div>
            <div class="avatar-sm">
                <span class="avatar-title bg-light text-primary rounded-3">
                    <i class="ri-shopping-cart-2-line font-size-24"></i>
                </span>
            </div>
        </div>
    </div><!-- end cardbody -->
</div><!-- end card -->
</div><!-- end col -->
<div class="col-xl-3 col-md-6">
<div class="card">
    <div class="card-body">
        <div class="d-flex">
            <div class="flex-grow-1">
                <p class="text-truncate font-size-14 mb-2">Total Suppliers</p>
                <h4 class="mb-2">
                    {{ $counts['suppliers'] }}
                </h4>
            </div>
            <div class="avatar-sm">
                <span class="avatar-title bg-light text-success rounded-3">
                    <i class="mdi mdi-currency-usd font-size-24"></i>
                </span>
            </div>
        </div>
    </div><!-- end cardbody -->
</div><!-- end card -->
</div><!-- end col -->
<div class="col-xl-3 col-md-6">
<div class="card">
    <div class="card-body">
        <div class="d-flex">
            <div class="flex-grow-1">
                <p class="text-truncate font-size-14 mb-2">Total Products</p>
                <h4 class="mb-2">
                    {{ $counts['products'] }}
                </h4>
            </div>
            <div class="avatar-sm">
                <span class="avatar-title bg-light text-primary rounded-3">
                    <i class="ri-user-3-line font-size-24"></i>
                </span>
            </div>
        </div>
    </div><!-- end cardbody -->
</div><!-- end card -->
</div><!-- end col -->
<div class="col-xl-3 col-md-6">
<div class="card">
    <div class="card-body">
        <div class="d-flex">
            <div class="flex-grow-1">
                <p class="text-truncate font-size-14 mb-2">Total Categories</p>
                <h4 class="mb-2">
                    {{ $counts['categories'] }}
                </h4>
            </div>
            <div class="avatar-sm">
                <span class="avatar-title bg-light text-success rounded-3">
                    <i class="mdi mdi-currency-btc font-size-24"></i>
                </span>
            </div>
        </div>
    </div><!-- end cardbody -->
</div><!-- end card -->
</div><!-- end col -->
</div><!-- end row -->

{{-- < class="row">


<div class="row">
<div class="col-xl-12">
<div class="card">
    <div class="card-body">
        <div class="dropdown float-end">
            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-dots-vertical"></i>
            </a>

        </div>

        <h4 class="card-title mb-4">Latest Transactions</h4>

        <div class="table-responsive">
            <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                <thead class="table-light">
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Status</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th style="width: 120px;">Salary</th>
                    </tr>
                </thead><!-- end thead -->
                <tbody>
                    <tr>
                        <td><h6 class="mb-0">Charles Casey</h6></td>
                        <td>Web Developer</td>
                        <td>
                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                        </td>
                        <td>
                            23
                        </td>
                        <td>
                            04 Apr, 2021
                        </td>
                        <td>$42,450</td>
                    </tr>
                     <!-- end -->
                     <tr>
                        <td><h6 class="mb-0">Alex Adams</h6></td>
                        <td>Python Developer</td>
                        <td>
                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>Deactive</div>
                        </td>
                        <td>
                            28
                        </td>
                        <td>
                            01 Aug, 2021
                        </td>
                        <td>$25,060</td>
                    </tr>
                     <!-- end -->
                     <tr>
                        <td><h6 class="mb-0">Prezy Kelsey</h6></td>
                        <td>Senior Javascript Developer</td>
                        <td>
                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                        </td>
                        <td>
                            35
                        </td>
                        <td>
                            15 Jun, 2021
                        </td>
                        <td>$59,350</td>
                    </tr>
                     <!-- end -->
                     <tr>
                        <td><h6 class="mb-0">Ruhi Fancher</h6></td>
                        <td>React Developer</td>
                        <td>
                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                        </td>
                        <td>
                            25
                        </td>
                        <td>
                            01 March, 2021
                        </td>
                        <td>$23,700</td>
                    </tr>
                     <!-- end -->
                     <tr>
                        <td><h6 class="mb-0">Juliet Pineda</h6></td>
                        <td>Senior Web Designer</td>
                        <td>
                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                        </td>
                        <td>
                            38
                        </td>
                        <td>
                            01 Jan, 2021
                        </td>
                        <td>$69,185</td>
                    </tr>
                     <!-- end -->
                     <tr>
                        <td><h6 class="mb-0">Den Simpson</h6></td>
                        <td>Web Designer</td>
                        <td>
                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>Deactive</div>
                        </td>
                        <td>
                            21
                        </td>
                        <td>
                            01 Sep, 2021
                        </td>
                        <td>$37,845</td>
                    </tr>
                     <!-- end -->
                     <tr>
                        <td><h6 class="mb-0">Mahek Torres</h6></td>
                        <td>Senior Laravel Developer</td>
                        <td>
                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                        </td>
                        <td>
                            32
                        </td>
                        <td>
                            20 May, 2021
                        </td>
                        <td>$55,100</td>
                    </tr>
                     <!-- end -->
                </tbody><!-- end tbody -->
            </table> <!-- end table -->
        </div>
    </div><!-- end card -->
</div><!-- end card -->
</div>
<!-- end col -->





</div> --}}

  <div class="row row-cols-md-2">
    <div class="card-group col-xl-12 gap-4">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">
                    Purchase Report
                </div>
                    <div class="card-body">
                        {!! $chart->container() !!}
                      </div>
            </div>
            <div class="card">
                <div class="card-header text-center bg-primary text-white">
                    Stock Report
                </div>
                    <div class="card-body">
                        {!! $stockChart->container() !!}
                      </div>
            </div>
    </div>
        </div>

<!-- end row -->


<div class="row">
    <div class="col-xl-12 pt-3">
    <div class="card">
        <div class="card-body">
            <div class="dropdown float-end">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>

            </div>

            <h4 class="card-title text-bold mb-4">Latest Purchase</h4>

            <div class="table-responsive">
                <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                    <thead class="table-light">
                        <tr>
                            <th>Supplier</th>
                            <th>Product</th>
                            <th>quantity</th>
                            <th>Price Per Unit</th>
                            <th>Total Price</th>
                        </tr>
                    </thead><!-- end thead -->
                    <tbody>
                        @foreach($transactions as $transaction)
                        <tr>
                            <td><h6 class="mb-0">{{ $transaction->supplier->name }}</h6></td>
                            <td>{{ $transaction->product->name }}</td>
                            <td>
                               {{ $transaction->buying_qty }}
                            </td>
                            <td>
                                {{ $transaction->unit_price }}
                            </td>
                            <td>
                                {{ $transaction->buying_price }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody><!-- end tbody -->
                </table> <!-- end table -->
            </div>
        </div><!-- end card -->
    </div><!-- end card -->
    </div>
</div>

<div class="row">
    <div class="col-xl-12 pt-3">
    <div class="card">
        <div class="card-body">
            <div class="dropdown float-end">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>

            </div>

            <h4 class="card-title text-bold mb-4">Latest Sales</h4>

            <div class="table-responsive">
                <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                    <thead class="table-light">
                        <tr>
                            <th>Customer</th>
                            <th>Product</th>
                            <th>Quantity </th>
                            <th>Price per unit</th>
                            <th>Total Price</th>
                        </tr>
                    </thead><!-- end thead -->
                    <tbody>
                        @foreach($sales as $key => $item)
                        <tr>
                            <td> {{ $item['payment']['customer']['name'] }} </td>
                            <td> #{{ $item["invoice_details"][0]["product"]["name"] }} </td>
                            <td> #{{ $item['invoice_details'][0]['selling_qty'] }} </td>
                            <td> {{ $item['invoice_details'][0]['unit_price']  }} </td>
                            <td>  $ {{ $item['payment']['total_amount'] }} </td>
                        </tr>
                        @endforeach
                    </tbody><!-- end tbody -->
                </table> <!-- end table -->
            </div>
        </div><!-- end card -->
    </div><!-- end card -->
    </div>
</div>

</div>

@endsection

@section('js')
<script src="{{ $chart->cdn() }}"></script>
{{ $chart->script() }}
<script src="{{ $stockChart->cdn() }}"></script>
{{ $stockChart->script() }}
@endsection
