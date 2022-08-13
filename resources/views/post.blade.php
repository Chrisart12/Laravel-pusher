@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background: rgb(0, 140, 255)">
                <div class="card-header">Page Post</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Vous êtes sur la page Post
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
