@extends('layout.app', ["current" => "home"])

@section('body')

    <div class="jumbotron bg-light border border-secondary">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <div class="card-title">
                            <h5 class="card-text">cadastro de produtos
                            </h5>
                            <p class="card-text">
                                Só não se esqueça de cadastrar previamente as categorias
                            </p>
                            <a href="/produtos" class="btn btn-primary">Cadastre seus produtos</a>
                        </div>
                    </div>
                </div>
                <div class="card border border-primary">
                    <div class="card-body">
                        <div class="card-title">
                            <h5 class="card-text">cadastro de Categorias
                            </h5>
                            <p class="card-text">
                                Cadastre as categorias dos seus produtos
                            </p>
                            <a href="/categorias" class="btn btn-primary">Cadastre suas Categorias</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
