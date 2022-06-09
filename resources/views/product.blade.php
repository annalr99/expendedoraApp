<body>

    <h1>Característiques:  </h1>
    <p>Nom: {{$detailProduct->name}}</p>
    <p>Pais: {{$detailProduct->country}} </p>
    <p>Kcal per unitat: {{$detailProduct->kcal_unit}} </p>
    <p>Kcal per 100g: {{$detailProduct->kcal_100g}}</p>
    <p>Percentatge de greixos:  {{$detailProduct->perc_fat}}</p>
    <p>Percentatge de carbohidrats: {{$detailProduct->perc_carb}}</p>
    <p>Percentatge de proteïnes: {{$detailProduct->perc_prot}}</p>
    <p>ingredients: {{$detailProduct->ingredients}}</p>
    <a href="/home">Tornar enrere</a>
    <a href="/shop"> Comprar producte </a>

</body>