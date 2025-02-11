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
                        <span></span> {{__('mycustom.allblogs')}}
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
                                                {{__('mycustom.allblogs')}}
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{ route('admin.blog.add') }}" class="btn btn-success float-end">{{__('mycustom.addnewblog')}}</a>
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
                                                    <th>{{__('mycustom.shortdescription')}}</th>
                                                    <th>{{__('mycustom.description')}}</th>
                                                    {{-- <th>popular</th> --}}
                                                    {{-- <th>Date</th> --}}
                                                    <th>{{__('mycustom.action')}}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = ($blogs->currentPage()-1)*$blogs->perPage();
                                                @endphp
                                                @foreach ($blogs as $blog)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td><img src="{{ asset('assets/imgs/blogs') }}/{{ $blog->image }}" width="60"> </td>
                                                    <td>{{ $blog->short_description }}</td>
                                                    <td>{{ $blog->description }}</td>
                                                    {{-- <td>{{ $blog->is_popular == 1 ? 'Yes' : 'No ' }}</td> --}}
                                                    <td>
                                                        <a href="{{ route('admin.blog.edit',['blog_id'=>$blog->id]) }}" class="text-info">{{__('mycustom.edit')}}</a>
                                                        <a href="#" class="text-danger" onclick="deleteConfirmation({{ $blog->id }})" style="margin-left: 20px;">{{__('mycustom.delete')}}</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{ $blogs->links() }}
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
                        <button type="button" class="btn btn-danger" onclick="deleteBlog()">{{__('mycustom.delete')}}</button>
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
            @this.set('blog_id',id);
            $('#deleteConfirmation').modal('show');
        }

        function deleteBlog()
        {
           @this.call('deleteBlog');
           $('#deleteConfirmation').modal('hide');
        }
    </script>
@endpush

