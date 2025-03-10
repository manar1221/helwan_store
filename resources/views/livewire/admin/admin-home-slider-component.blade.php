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
                        <span></span> {{__('mycustom.allslides')}}
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
                                                {{__('mycustom.allslides')}}
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('admin.home.slide.add') }}" class="btn btn-success float-end">{{__('mycustom.addnewslide')}}</a>
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
                                                    <th>#</th>
                                                    <th>{{__('mycustom.image')}}</th>
                                                    <th>{{__('mycustom.toptitle')}}</th>
                                                    <th>{{__('mycustom.title')}}</th>
                                                    <th>{{__('mycustom.subtitle')}}</th>
                                                    <th>{{__('mycustom.offer')}}</th>
                                                    <th>{{__('mycustom.link')}}</th>
                                                    <th>{{__('mycustom.status')}}</th>
                                                    <th>{{__('mycustom.action')}}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 0;
                                                @endphp
                                                @foreach ($slides as $slide)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td><img src="{{asset('assets/imgs/slider')}}/{{$slide->image}}" width="80"></td>
                                                    <td>{{ $slide->top_title }}</td>
                                                    <td>{{ $slide->title }}</td>
                                                    <td>{{ $slide->sub_title }}</td>
                                                    <td>{{ $slide->offer }}</td>
                                                    <td>{{ $slide->link }}</td>
                                                    <td>{{ $slide->status == 1 ? 'Active' : 'Inactive'}}</td>
                                                    <td>
                                                        <a href="{{ route('admin.home.slide.edit',['slide_id'=>$slide->id]) }}" class="text-info">{{__('mycustom.edit')}}</a>
                                                        <a href="#" class="text-danger" onclick="deleteConfirmation({{ $slide->id }})" style="margin-left: 20px;">{{__('mycustom.delete')}}</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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
                        <button type="button" class="btn btn-danger" onclick="deleteSlide()">{{__('mycustom.delete')}}</button>
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
            @this.set('slide_id',id);
            $('#deleteConfirmation').modal('show');
        }

        function deleteSlide()
        {
           @this.call('deleteSlide');
           $('#deleteConfirmation').modal('hide');
        }
    </script>
@endpush
