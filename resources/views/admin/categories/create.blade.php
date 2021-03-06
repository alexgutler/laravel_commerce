@extends('app')

@section('title')
    <title>CodeCommerce - Admin - Create Category</title>
@endsection

@section('content')

    <div class="container">
        <h1>Create Category</h1>

        @if ($errors->any())
            <ul class="alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {{--
            * http://laravel.com/docs/4.2/html
            * http://laravelcollective.com/ * http://laravelcollective.com/docs/5.0/html
        --}}
        {!! Form::open(['route' => 'admin.categories.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Description:') !!}
                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Add Category', ['class' => 'btn btn-primary']) !!}
                <a href="{{route('admin.categories.index')}}" class="btn btn-default">Return</a>
            </div>
        {!! Form::close() !!}
    </div>
@endsection
