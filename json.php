<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
$perfumes = array(
    array(
        "Id" => "1",
        "brand" => "Penshoppe",
        "name" => "Hustle Night Eau de Toilette",
        "color" => "Black",
        "price" => "₱314",
        "size" => "100 ml",
        "ingredient" => "Sodium Tallowate Sodium Cocoate Fragrance Triclocarbon."
    ),
    array(
        "Id" => "2",
        "brand" => "Penshoppe",
        "name" => "Lovestory Eau De Toilette",
        "color" => "Gray",
        "price" => "₱299",
        "sixe" => "50 ml",
        "ingredient" => "Black pepper Cardamom Mint Vanilla linger Lavender."
    ),
    array(
        "Id" => "3",
        "brand" => "Versace",
        "name" => "Versace eros",
        "color" => "Black",
        "price" => "₱ 130",
        "size" => "100 ml",
        "ingredient" => "Alcohol Denat. (Sd Alcohol 39 C) Fragrance Coumarine Linalool."
    ),
    array(
        "Id" => "4",
        "brand" => "Dior",
        "name" => "SAUVAGE EAU DE TOILETTE",
        "color" => "Blue",
        "price" => "₱4,950 to ₱6,650",
        "size" => "100ml",
        "ingredient" => "Alcohol Aqua(water) Fragrance Imonene Linolool."
    ),
    array(
        "Id" => "5",
        "brand" => "Penshoppe",
        "name" => "Pumped Blue Eau De Toilette",
        "color" => "Blue",
        "price" => "₱349",
        "size" => "100 ml",
        "ingredient" => "Bergamot Citrus Green Ozone Aldehyde notes with Floral."
    )
);

echo json_encode($perfumes);
?>
