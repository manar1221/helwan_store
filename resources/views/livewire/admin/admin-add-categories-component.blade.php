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
                        <span></span> {{__('mycustom.addnewcategory')}}
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
                                                {{__('mycustom.addnewcategory')}}
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('admin.categories') }}" class="btn btn-success float-end">{{__('mycustom.allcategories')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        @if (Session::has('message'))
                                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                        @endif
                                        <form wire:submit.prevent="storeCategory">
                                            <div class="md-3 mt-3">
                                                <label for="name" class="from-lable">{{__('mycustom.name')}}</label>
                                                <input type="text" name="name" class="from-control" placeholder="{{__('mycustom.entercategoryname')}}" wire:model="name" wire:keyup="generateSlug">
                                                @error('name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="md-3 mt-3">
                                                <label for="slug" class="from-lable">{{__('mycustom.slug')}}</label>
                                                <input type="text" name="slug" class="from-control" placeholder="{{__('mycustom.entercategoryslug')}}" wire:model="slug">
                                                @error('slug')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="md-3 mt-3">
                                                <label for="image" class="from-lable">{{__('mycustom.image')}}</label>
                                                <input type="file" class="from-control" wire:model="image">
                                                @error('image')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                @if ($image)
                                                    <img src="{{ $image->temporaryUrl() }}" width="120">
                                                @endif
                                            </div>

                                            <div class="md-3 mt-3">
                                                <label for="is_popular" class="from-lable">{{__('mycustom.popularr')}}</label>
                                                <select name="is_popular" class="from-control" wire:model="is_popular">
                                                    <option value="0">{{__('mycustom.no')}}</option>
                                                    <option value="1">{{__('mycustom.yes')}}</option>
                                                </select>
                                                @error('is_popular')
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
