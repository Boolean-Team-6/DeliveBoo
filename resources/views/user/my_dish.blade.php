@extends('layouts.app')

@section('content')
<show-id>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card card-container">
                    <img class="card-img-top" src="{{asset($dish->img)}}" alt="dish image">
                    <div class="card-body">
                        <h2 class="card-title"><strong>Nome:</strong> {{$dish->name}}</h2>
                        <p class="card-text"><strong>Ingredienti:</strong> {{$dish->ingredients}}</p>
                        <p class="card-text"><strong>Descrizione:</strong> {{$dish->description}}</p>
                        <p class="card-text"><strong>Menu:</strong> {{$dish->dishToType->name}}</p>
                        <p class="card-text"><strong>Prezzo:</strong> {{$dish->price}}€</p>
                        <div class="row">
                            <div class="col d-flex">
                                    {{-- <a href="{{ route('my-dishes.destroy', $dish->id) }}">Elimina il piatto</a> --}}
                                    <a class="btn btn-outline-info my-2" href="{{ route('my-dishes.edit', $dish->id) }}">Modifica il piatto</a>


                                    <form action="{{ route('my-dishes.destroy', $dish->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="my-2 mx-2 btn btn-outline-danger"  type="submit">Elimina</button>
                                    </form>
                            
                            </div>
                        </div>

                    </div>
                </div>

                {{-- banner per autorizzare aliminazione piatto --}}

                <div class="banner-container" v-show="isBannerDish">

                    <div class="banner">
                        <form action="{{ route('my-dishes.destroy', $dish->id) }}" method="post">
                            @csrf
                            @method('delete')
    
                            <h3>Sei sicuro di voler eliminare questo piatto?</h3>
                            <button type="submit" @click="activeBannerDish">Elimina</button>
                        </form>

                        <a href="#" @click="activeBannerDish">Annulla</a>
                    </div>

                </div>

                <a href="#" @click="activeBannerDish">Elimina Piatto</a>
        
            </div>

            
        </div>

    </div>
</show-id>
@endsection
