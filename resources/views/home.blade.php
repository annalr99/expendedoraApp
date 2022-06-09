<body>

    <h2> Hola {{session('usuari')->last_name}}, {{session('usuari')->name}} </h2>
    <h2>Saldo: {{session('usuari')->IBAN}}</h2>
    
    <h1>Llistat de productes: </h1>
    <?php
    foreach ($products as $product){
        echo "<a href='/product/" . $product->id . "'><p>" . $product->name . "</p></a><br>";
    }
    ?>

</body>