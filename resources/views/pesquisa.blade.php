<form action="" name = "formFiltros" id="formFiltros" method="post">
    @csrf
    <div class="filtros">
        <div>
            <input type="text" name="name" id="name" placeholder="Pesuisar por nome:"> 
        </div>
        <div>
            <input type="date" name="starDate" id="searchStarDate"> à
            <input type="date" name="endDate" id="searchEndDate"> 
        </div>
        <div>
            <input type="submit" value="Buscar">
        </div>
    </div>
</form>