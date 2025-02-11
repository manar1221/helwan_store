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
                        <span></span> {{__('mycustom.addnewslide')}}
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
                                                {{__('mycustom.addnewslide')}}
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('admin.home.slider') }}" class="btn btn-success float-end">{{__('mycustom.allslides')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        @if (Session::has('message'))
                                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                        @endif
                                        <form wire:submit.prevent="addSlide">
                                            <div class="md-3 mt-3">
                                                <label class="from-lable">{{__('mycustom.toptitle')}}</label>
                                                <input type="text" class="from-control" placeholder="{{__('mycustom.enterslidetoptitle')}}" wire:model="top_title">
                                                @error('top_title')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="md-3 mt-3">
                                                <label class="from-lable">{{__('mycustom.title')}}</label>
                                                <input type="text" class="from-control" placeholder="{{__('mycustom.enterslidetitle')}}" wire:model="title">
                                                @error('title')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="md-3 mt-3">
                                                <label class="from-lable">{{__('mycustom.subtitle')}}</label>
                                                <input type="text" class="from-control" placeholder="{{__('mycustom.enterslidesubtitle')}}" wire:model="sub_title">
                                                @error('sub_title')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="md-3 mt-3">
                                                <label class="from-lable">{{__('mycustom.offer')}}</label>
                                                <input type="text" class="from-control" placeholder="{{__('mycustom.enteroffer')}}" wire:model="offer">
                                                @error('offer')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="md-3 mt-3">
                                                <label class="from-lable">{{__('mycustom.link')}}</label>
                                                <input type="text" class="from-control" placeholder="{{__('mycustom.enterslidelink')}}" wire:model="link">
                                                @error('link')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="md-3 mt-3">
                                                <label class="from-lable">{{__('mycustom.status')}}</label>
                                                <select class="form-select" wire:model="status">
                                                    <option value="1">{{__('mycustom.active')}}</option>
                                                    <option value="0">{{__('mycustom.inactive')}}</option>
                                                </select>
                                                @error('status')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="md-3 mt-3">
                                                <label class="from-lable">{{__('mycustom.image')}}</label>
                                                <input type="file" class="from-control" wire:model="image">
                                                @if ($image)
                                                    <img src="{{$image->temporaryUrl()}}" width="100">
                                                @endif
                                                @error('image')
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
