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
                        <span></span> {{__('mycustom.editblog')}}
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
                                                {{__('mycustom.editblog')}}
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
                                        <form wire:submit.prevent="updateBlog">
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
                                                <input type="file" name="image" class="from-control" wire:model="newimage">
                                                @if ($newimage)
                                                    <img src="{{ $newimage->temporaryUrl() }}" width="120">
                                                @else
                                                    <img src="{{asset('assets/imgs/blogs')}}/{{$image}}" width="120">
                                                @endif
                                                @error('newimage')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <button type="submit" class="btn btn-primary float-end">{{__('mycustom.update')}}</button>
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
