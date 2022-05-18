@extends('layouts/standard')

@section('pageTitle')
    Create Comic
@endsection

@section('showPage')
    <div class="create-wrapper">
        <div class="form-wrapper">
            <form action="{{ route('comics.store') }}" method="post">
                @csrf
        
                <label for="title">Title</label>
                <input type="text" name="title">
        
                <label for="description">Description</label>
                <textarea type="text" name="description"></textarea>

                <label for="thumb">Image Link</label>
                <input type="text" name="thumb">

                <label for="series">Series</label>
                <input type="text" name="series">

                <label for="sale_date">Sale date</label>
                <input type="date" name="sale_date">
        
                <label for="price">Price</label>
                <input type="text" name="price">
        
                <input type="submit" value="Invia" id="buttonSbmt" class="button">

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