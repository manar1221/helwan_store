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
                        <span></span> {{__('mycustom.addnewblog')}}
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
                                               {{__('mycustom.addnewblog')}}
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('admin.blogs') }}" class="btn btn-success float-end">{{__('mycustom.allblogs')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        @if (Session::has('message'))
                                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                        @endif
                                        <form wire:submit.prevent="addBlog">
                                            <div class="md-3 mt-3">
                                                <label for="name" class="from-lable">{{__('mycustom.name')}}</label>
                                                <input type="text" name="slug" class="from-control" placeholder="{{__('mycustom.enterblogname')}}" wire:model="name" wire:keyup="generateSlug">
                                                @error('name')
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
                                                <label for="image" class="from-lable">{{__('mycustom.image')}}</label>
                                                <input type="file" name="image" class="from-control" wire:model="image">
                                                @if ($image)
                                                    <img src="{{ $image->temporaryUrl() }}" width="120">
                                                @endif
                                                @error('image')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            {{-- <div class="md-3 mt-3">
                                                <label for="is_popular" class="from-lable">{{__('mycustom.popular')}}</label>
                                                <select name="is_popular" class="from-control" wire:model="is_popular">
                                                    <option value="0">{{__('mycustom.no')}}</option>
                                                    <option value="1">{{__('mycustom.yes')}}</option>
                                                </select>
                                                @error('is_popular')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div> --}}

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
