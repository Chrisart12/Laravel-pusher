@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a style="margin-top: 30px; margin-bottom: 5px;" href="{{ route('posts.create') }}" class="btn btn-info" role="button">Ajouter un post</a> 

            @forelse ($posts as $post)
                <div class="card" style="margin-top: 30px;">
                    <div class="card-header" style="display: flex; justify-content: space-between;">
                        <div> {{ $post->title }}</div>
                        <form action="{{ route('posts.like') }}" method="post" id="like">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                        </form>
                        <div>
                            <button style="padding: 0;border: none;background: none;" type="submit" form="like">
                                <svg style="cursor:pointer;" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" 
                                    fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/>
                                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                                </svg>
                            </button>
                            {{-- <a href="{{ route('posts.create') }}">
                                Ajouter un post
                            </a>  --}}
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ $post->description }}
                    </div>
                </div>
            @empty
                Pas de poste
            @endforelse

        </div>
    </div>
</div>
@endsection
