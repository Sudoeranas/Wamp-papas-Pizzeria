<?php

$listeDePizzas = array(
    array(
        'identifiant' => 1,
        'nom' => 'Barbecue',
        'ingredients' => 'La garniture',
        'imageURL' => 'http://localhost/static/images/pizzas/pizza-bbq.jpg',
        'prix' => 6.5
    ),
    array(
        'identifiant' => 2,
        'nom' => 'Hawaï',
        'ingredients' => 'La garniture',
        'imageURL' => 'http://localhost/static/images/pizzas/pizza-hawai.jpg',
        'prix' => 9.5
    ),
    array(
        'identifiant' => 3,
        'nom' => 'Epinards',
        'ingredients' => 'La garniture',
        'imageURL' => 'http://localhost/static/images/pizzas/pizza-spinach.jpg',
        'prix' => 8.5
    ),
    array(
        'identifiant' => 4,
        'nom' => 'Végétarienne',
        'ingredients' => 'La garniture',
        'imageURL' => 'http://localhost/static/images/pizzas/pizza-vegetable.jpg',
        'prix' => 10.5
    )
);

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo json_encode($listeDePizzas);
} else {
    http_response_code(405); // Méthode pas autorisée
    echo json_encode(array('message' => 'Méthode pas autorisée bg'));
}

?>
