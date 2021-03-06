@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/posts.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($post, ['route' => ['admin.posts.update', $post->id], 'method' => 'patch']) !!}

                        @include('admin.posts.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
