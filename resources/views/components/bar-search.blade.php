<div class="row justify-content-md-center mt-5">
    <div class="col">
    <form action="{{route('search')}}" method="POST">
        @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Pesquisar..." aria-label="Caixa de pesquisa" aria-describedby="button-addon2" name='search'>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Pesquisar</button>
                </div>
            </div>
        </form>
    </div>
</div>