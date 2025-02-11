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
                        <span></span> {{__('mycustom.addnewproduct')}}
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
                                                {{__('mycustom.addnewproduct')}}
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('admin.products') }}" class="btn btn-success float-end">{{__('mycustom.allproducts')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        @if (Session::has('message'))
                                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                        @endif
                                        <form wire:submit.prevent="addProduct">
                                            <div class="md-3 mt-3">
                                                <label for="name" class="from-lable">{{__('mycustom.name')}}</label>
                                                <input type="text" name="slug" class="from-control" placeholder="{{__('mycustom.enterproductname')}}" wire:model="name" wire:keyup="generateSlug">
                                                @error('name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <!--<div class="md-3 mt-3">-->
                                            <!--    <label for="slug" class="from-lable">{{__('mycustom.slug')}}</label>-->
                                            <!--    <input type="text" name="slug" class="from-control" placeholder="{{__('mycustom.enterproductslug')}}" wire:model="slug">-->
                                            <!--    @error('slug')-->
                                            <!--        <p class="text-danger">{{ $message }}</p>-->
                                            <!--    @enderror-->
                                            <!--</div>-->
                                            
                                            <div class="md-3 mt-3">
                                                <label for="phone" class="from-lable">{{__('mycustom.phone')}} </label>
                                                <input type="number" id="phone" name="phone" class="from-control" placeholder="{{__('mycustom.phone')}}" wire:model="phone">
                                                @error('phone')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="md-3 mt-3">
                                                <label for="short_description" class="from-lable">{{__('mycustom.shortdescription')}}</label>
                                                <textarea class="from-control" name="short_description" placeholder="{{__('mycustom.entershortdescription')}}" wire:model="short_description"></textarea>
                                                @error('short_description')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="md-3 mt-3">
                                                <label for="description" class="from-lable">{{__('mycustom.description')}}</label>
                                                <textarea class="from-control" name="description" placeholder="{{__('mycustom.enterdescription')}}" wire:model="description"></textarea>
                                                @error('description')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="md-3 mt-3">
                                                <label for="regular_price" class="from-lable">{{__('mycustom.regularprice')}} </label>
                                                <input type="text" name="regular_price" class="from-control" placeholder="{{__('mycustom.enterregularprice')}}" wire:model="regular_price">
                                                @error('regular_price')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="md-3 mt-3">
                                                <label for="sale_price" class="from-lable">{{__('mycustom.saleprice')}} </label>
                                                <input type="text" name="sale_price" class="from-control" placeholder="{{__('mycustom.entersaleprice')}}" wire:model="sale_price">
                                                @error('sale_price')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <!--<div class="md-3 mt-3">-->
                                            <!--    <label for="sku" class="from-lable">{{__('mycustom.sku')}}</label>-->
                                            <!--    <input type="text" name="sku" class="from-control" placeholder="{{__('mycustom.entersku')}}" wire:model="sku">-->
                                            <!--    @error('sku')-->
                                            <!--        <p class="text-danger">{{ $message }}</p>-->
                                            <!--    @enderror-->
                                            <!--</div>-->

                                            <div class="md-3 mt-3">
                                                <label for="stock_status" class="from-lable" wire:model="stock_status">{{__('mycustom.stockstatus')}}</label>
                                                <select name="" id="" class="from-control">
                                                    <option value="instock">{{__('mycustom.instock')}}</option>
                                                    <option value="outofstock">{{__('mycustom.outofstock')}}</option>
                                                </select>
                                                @error('stock_status')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="md-3 mt-3">
                                                <label for="featured" class="from-lable">{{__('mycustom.featured')}}</label>
                                                <select name="featured" class="from-control" wire:model="featured">
                                                    <option value="0">{{__('mycustom.no')}}</option>
                                                    <option value="1">{{__('mycustom.yes')}}</option>
                                                </select>
                                                @error('featured')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="md-3 mt-3">
                                                <label for="quantity" class="from-lable">{{__('mycustom.quantity')}} </label>
                                                <input type="text" name="quantity" class="from-control" placeholder="{{__('mycustom.enterproductquantity')}}" wire:model="quantity">
                                                @error('quantity')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="md-3 mt-3">
                                                <label for="image" class="from-lable">{{__('mycustom.image')}}</label>
                                                <input type="file" name="image" class="from-control" wire:model="image">
                                                @if ($image)
                                                    <img src="{{ $image->temporaryUrl() }}" width="120">
                                                @endif
                                                @error('image')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="md-3 mt-3">
                                                <label for="category_id" class="from-lable">{{__('mycustom.category')}}</label>
                                                <select name="category_id" class="from-control" wire:model="category_id">
                                                    <option value="">{{__('mycustom.selectcategory')}}</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <button type="submit" class="btn btn-primary float-end">{{__('mycustom.submit')}}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </main>
</div>
