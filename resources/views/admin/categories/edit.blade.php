@extends('app')

@section('title')
    <title>CodeCommerce - Admin - Editing Category</title>
@endsection

@section('content')

    <div class="container">
        <h1>Editing Category: {{$category->name}}</h1>

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
        {!! Form::open( ['route' => ['admin.categories.update', $category->id, 'method' => 'put'] ] ) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', $category->name, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Description:') !!}
                {!! Form::textarea('description', $category->description, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::hidden('_method', 'put') !!}
                {!! Form::submit('Update Category', ['class' => 'btn btn-primary']) !!}
                <a href="{{route('admin.categories.index')}}" class="btn btn-default">Cancel</a>
            </div>
        {!! Form::close() !!}
    </div>
@endsection
