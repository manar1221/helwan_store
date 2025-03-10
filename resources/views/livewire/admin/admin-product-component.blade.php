<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav.hidden{
            display: block;
        }
    </style>
    <main class="main">
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="/" rel="nofollow">{{__('mycustom.home')}}</a>
                        <span></span> {{__('mycustom.allproducts')}}
                    </div>
                </div>
            </div>
            <section class="mt-50 mb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-6">
                                                {{__('mycustom.allproducts')}}
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('admin.product.add') }}" class="btn btn-success float-end">{{__('mycustom.addnewproduct')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        @if (Session::has('message'))
                                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                        @endif
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <!--<th>#</th>-->
                                                    <th>{{__('mycustom.username')}}</th>
                                                    <th>{{__('mycustom.image')}}</th>
                                                    <th>{{__('mycustom.name')}}</th>
                                                    <th>{{__('mycustom.stockstatus')}}</th>
                                                    <th>{{__('mycustom.price')}}</th>
                                                    <th>{{__('mycustom.category')}}</th>
                                                    <th>{{__('mycustom.phone')}}</th>
                                                    <th>{{__('mycustom.date')}}</th>
                                                    <th>{{__('mycustom.action')}}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = ($allproducts->currentPage()-1)*$allproducts->perPage();
                                                @endphp
                                                @if(Auth::user()->utype == 'ADM')
                                                    @foreach ($allproducts as $all)
                                                        <tr>
                                                            <!--<td>{{ $all->id }}</td>-->
                                                            <td>{{ $all->user_id }}</td>
                                                            <td><img src="{{ asset('assets/imgs/products')}}/{{$all->image}}" alt="{{ $all->name }}" width="60"></td>
                                                            <td>{{ $all->name }}</td>
                                                            <td>{{ $all->stock_status }}</td>
                                                            <td>{{ $all->regular_price }}</td>
                                                            <td>{{ $all->category->name }}</td>
                                                            <td>{{ $all->phone }}</td>
                                                            <td>{{ $all->created_at }}</td>
                                                            <td>
                                                                <a href="{{ route('admin.product.edit',['product_id'=>$all->id])}}" class="text-info">{{__('mycustom.edit')}}</a>
                                                                <a href="#" onclick="deleteConfirmation({{ $all->id }})" class="text-danger">{{__('mycustom.delete')}}</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    @foreach ($user->products as $product)
                                                    <tr>
                                                        <td>{{ $product->id }}</td>
                                                        <td><img src="{{ asset('assets/imgs/products')}}/{{$product->image}}" alt="{{ $product->name }}" width="60"></td>
                                                        <td>{{ $product->name }}</td>
                                                        <td>{{ $product->stock_status }}</td>
                                                        <td>{{ $product->regular_price }}</td>
                                                        <td>{{ $product->category->name }}</td>
                                                        <td>{{ $product->phone }}</td>
                                                        <td>{{ $product->created_at }}</td>
                                                        <td>
                                                            <a href="{{ route('admin.product.edit',['product_id'=>$product->id])}}" class="text-info">{{__('mycustom.edit')}}</a>
                                                            <a href="#" onclick="deleteConfirmation({{ $product->id }})" class="text-danger">{{__('mycustom.delete')}}</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                        {{ $allproducts->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </main>
</div>

<div class="modal" id="deleteConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-30 pt-30">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4 class="pb-3">{{__('mycustom.deleteconfirm')}}</h4>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteConfirmation">{{__('mycustom.cancel')}}</button>
                        <button type="button" class="btn btn-danger" onclick="deleteProduct()">{{__('mycustom.delete')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function deleteConfirmation(id)
        {
            @this.set('product_id',id);
            $('#deleteConfirmation').modal('show');
        }

        function deleteProduct()
        {
           @this.call('deleteProduct');
           $('#deleteConfirmation').modal('hide');
        }
    </script>
@endpush
