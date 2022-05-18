@extends('layouts/standard')

@section('pageTitle')
    Edit Comic
@endsection

@section('showPage')
    <div class="create-wrapper">
        <div class="form-wrapper">
            <form action="{{ route('comics.update', $comic->id) }}" method="post">
                @csrf

                @method('PUT')
        
                <label for="title">Title</label>
                <input type="text" name="title" value="{{ $comic->title }}">
        
                <label for="description">Description</label>
                <textarea type="text" name="description">{{ $comic->description }}</textarea>

                <label for="thumb">Image Link</label>
                <input type="text" name="thumb" value="{{ $comic->thumb }}">

                <label for="series">Series</label>
                <input type="text" name="series" value="{{ $comic->series }}">

                <label for="sale_date">Sale date</label>
                <input type="date" name="sale_date">
        
                <label for="price">Price</label>
                <input type="text" name="price" value="{{ $comic->price }}">
        
                <input type="submit" value="Edita" id="buttonSbmt" class="button">

                @if ($errors->any())
                    <div class="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
        </div>
    </div>
@endsection