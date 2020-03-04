@extends('Layouts.home-template')



@section('user_loged')

<p>{{auth()->user()->name}}</p>

@endsection

@section('content')

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>Productos</div>
    <div class="card-body">
        <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div id="dataTable_filter" class="dataTables_filter">
                            <form class="form" action="{{ route('Products') }}" method="post">
                                {{ csrf_field() }}
                            <label>Search:
                                <input type="search" class="form-control form-control-sm" placeholder=""
                                    aria-controls="dataTable" name="Busqueda">
                            </label>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered dataTable" id="dataTable" role="grid"
                            aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
                            <thead>
                                <tr role="row">
                                    <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        style="width: 57px;">
                                        id
                                    </th>
                                    <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        style="width: 67px;">
                                        Type
                                    </th>
                                    <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        style="width: 49px;">
                                        ProductName
                                    </th>
                                    <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        style="width: 30px;">
                                        ProductBrand
                                    </th>
                                    <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        style="width: 64px;">
                                        Value
                                    </th>
                                    <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        style="width: 64px;">
                                        Stock
                                    </th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">id</th>
                                    <th rowspan="1" colspan="1">Type</th>
                                    <th rowspan="1" colspan="1">ProductName</th>
                                    <th rowspan="1" colspan="1">ProductBrand</th>
                                    <th rowspan="1" colspan="1">Value</th>
                                    <th rowspan="1" colspan="1">Stock</th>
                                </tr>
                            </tfoot>
                            <tbody>

                                @foreach ($productos as $prod)
                                <tr>
                                    <td> {{$prod->id}} </td>
                                    <td> {{$prod->Type}} </td>
                                    <td> {{$prod->ProductName}} </td>
                                    <td> {{$prod->ProductBrand}} </td>
                                    <td> {{$prod->Value}} </td>
                                    <td> {{$prod->Stock}} </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">
                            <!-- left footer of table -->
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                            {{ $productos->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')



@endsection