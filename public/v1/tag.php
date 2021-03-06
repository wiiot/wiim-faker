<?php

require __DIR__ . '/app/URI.php';

date_default_timezone_set('UTC');

$root = Application\URI::getRoot(false, '/images/icons/96');
$id = $_GET["id"];
$data = [];

if ($id == 10) {
    $data = [
        "alias" => "Válvula XYZ",
        "comment" => "Válvula de controle de alguma coisa, 8 bits.",
        "icon" => "valve",
        "icon_url" => $root . "valve.png",
        "id" => 10,
        "name" => "Random.Valve",
        "server" => 1,
        "unit" => ""
    ];
} elseif ($id == 13) {
    $data = [
        "alias" => "Bomba",
        "comment" => "Comentário da bomba.",
        "icon" => "pump",
        "icon_url" => $root . "pump.png",
        "id" => 13,
        "name" => "Random.Bomba",
        "server" => 1,
        "unit" => "m³/s"
    ];
} elseif ($id == 15) {
    $data = [
        "alias" => "Refratômetro",
        "comment" => "Indice de refração de algo medido em graus de Brix.",
        "icon" => "sensor",
        "icon_url" => $root . "sensor.png",
        "id" => 15,
        "name" => "Random.Sensor",
        "server" => 2,
        "unit" => "ºBx"
    ];
} elseif ($id == 18) {
    $data = [
        "alias" => "Alguma coisa",
        "comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus iaculis, felis vitae fermentum pulvinar, magna metus.",
        "icon" => "",
        "icon_url" => "",
        "id" => 18,
        "name" => "Random.xyz",
        "server" => 1,
        "unit" => "m/s²"
    ];
} elseif ($id == 92) {
    $data = [
        "alias" => "Manômetro",
        "comment" => "Medidor de pressão da entrada de alguma coisa",
        "icon" => "pressure",
        "icon_url" => $root . "pressure.png",
        "id" => 92,
        "name" => "Random.abc",
        "server" => 1,
        "unit" => "Bar"
    ];
} elseif ($id == 53) {
    $data = [
        "alias" => "Termômetro",
        "comment" => "Comentário do Termômetro",
        "icon" => "thermometer",
        "icon_url" => $root . "thermometer.png",
        "id" => 53,
        "name" => "Random.Thermal",
        "server" => 1,
        "unit" => "K"
    ];
} elseif ($id == 54) {
    $data = [
        "alias" => "Motor M6",
        "comment" => "Comentário do motor",
        "icon" => "motor",
        "icon_url" => $root . "motor.png",
        "id" => 54,
        "name" => "Random.Motor",
        "server" => 1,
        "unit" => "rpm"
    ];
} elseif ($id == 60) {
    $data = [
        "alias" => "Sensor capacitivo",
        "comment" => "Sensor capacitivo com resolução de 16 bits.",
        "icon" => "sensor",
        "icon_url" => $root . "sensor.png",
        "id" => 60,
        "name" => "Random.Sensor",
        "server" => 3,
        "unit" => ""
    ];
} elseif ($id == 64) {
    $data = [
        "alias" => "Corrente M6",
        "comment" => "Corrente do motor M6",
        "icon" => "multimeter",
        "icon_url" => $root . "multimeter.png",
        "id" => 64,
        "name" => "Random.Corrent",
        "server" => 3,
        "unit" => "A"
    ];
} elseif ($id == 74) {
    $data = [
        "alias" => "Bomba d'agua",
        "comment" => "Comentário da bomba",
        "icon" => "pump",
        "icon_url" => $root . "pump.png",
        "id" => 74,
        "name" => "Random.Bomba2",
        "server" => 2,
        "unit" => "m³/h"
    ];
} elseif ($id == 99) {
    $data = [
        "alias" => "Motor",
        "comment" => "Comentário do motor",
        "icon" => "motor",
        "icon_url" => $root . "motor.png",
        "id" => 99,
        "name" => "Random.motor",
        "server" => 1,
        "unit" => "rpm"
    ];
} elseif ($id == 152) {
    $data = [
        "alias" => "Esteira",
        "comment" => "Comentário da esteira",
        "icon" => "conveyor-1",
        "icon_url" => $root . "conveyor-1.png",
        "id" => 152,
        "name" => "Random.Esteira",
        "server" => 1,
        "unit" => "m/s"
    ];
} elseif ($id == 153) {
    $data = [
        "alias" => "Bomba",
        "comment" => "Comentário da bomba",
        "icon" => "pump",
        "icon_url" => $root . "pump.png",
        "id" => 153,
        "name" => "Random.Bomba",
        "server" => 2,
        "unit" => "m³/h"
    ];
} elseif ($id == 154) {
    $data = [
        "alias" => "120 Caracteres",
        "comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus iaculis, felis vitae fermentum pulvinar, magna metus.",
        "icon" => "valve",
        "icon_url" => $root . "valve.png",
        "id" => 154,
        "name" => "Random.qwert",
        "server" => 2,
        "unit" => "m³/h"
    ];
} elseif ($id == 155) {
    $data = [
        "alias" => "Alguma coisa",
        "comment" => "Comentário dessa coisa",
        "icon" => "",
        "icon_url" => "",
        "id" => 155,
        "name" => "Random.xyz",
        "server" => 3,
        "unit" => "m/s^2"
    ];
} elseif ($id == 100) {
    $data = [
        "alias" => "Termômetro",
        "comment" => "Comentário do Termômetro",
        "icon" => "thermometer",
        "icon_url" => $root . "thermometer.png",
        "id" => 100,
        "name" => "Random.abc",
        "server" => 1,
        "unit" => "ºC"
    ];
} elseif ($id == 156) {
    $data = [
        "alias" => "Motor",
        "comment" => "Comentário do motor",
        "icon" => "motor",
        "icon_url" => $root . "motor.png",
        "id" => 156,
        "name" => "Random.motor",
        "server" => 1,
        "unit" => "rpm"
    ];
} elseif ($id == 157) {
    $data = [
        "alias" => "Corrente entrada",
        "comment" => "Comentário da corrente entrada",
        "icon" => "multimeter",
        "icon_url" => $root . "multimeter.png",
        "id" => 157,
        "name" => "Random.corrente",
        "server" => 1,
        "unit" => "A"
    ];
} elseif ($id == 158) {
    $data = [
        "alias" => "Tensão saida",
        "comment" => "Comentário da tensão saida",
        "icon" => "multimeter",
        "icon_url" => $root . "multimeter.png",
        "id" => 158,
        "name" => "Random.tensao",
        "server" => 2,
        "unit" => "V"
    ];
} elseif ($id == 159) {
    $data = [
        "alias" => "Bomba",
        "comment" => "Comentário da bomba",
        "icon" => "pump",
        "icon_url" => $root . "pump.png",
        "id" => 159,
        "name" => "Random.Bomba",
        "server" => 1,
        "unit" => "m³/h"
    ];
} elseif ($id == 160) {
    $data = [
        "alias" => "Bomba d'agua",
        "comment" => "Comentário da bomba",
        "icon" => "pump",
        "icon_url" => $root . "pump.png",
        "id" => 160,
        "name" => "Random.Bomba2",
        "server" => 1,
        "unit" => "m³/h"
    ];
} elseif ($id == 161) {
    $data = [
        "alias" => "Alguma coisa",
        "comment" => "Comentário dessa coisa",
        "icon" => "",
        "icon_url" => "",
        "id" => 161,
        "name" => "Random.xyz",
        "server" => 1,
        "unit" => "m/s^2"
    ];
} elseif ($id == 162) {
    $data = [
        "alias" => "Termômetro",
        "comment" => "Comentário do Termômetro",
        "icon" => "thermometer",
        "icon_url" => $root . "thermometer.png",
        "id" => 162,
        "name" => "Random.abc",
        "server" => 2,
        "unit" => "ºC"
    ];
} elseif ($id == 163) {
    $data = [
        "alias" => "Motor",
        "comment" => "Comentário do motor",
        "icon" => "motor",
        "icon_url" => $root . "motor.png",
        "id" => 163,
        "name" => "Random.motor",
        "server" => 1,
        "unit" => "rpm"
    ];
} elseif ($id == 164) {
    $data = [
        "alias" => "Corrente entrada",
        "comment" => "Comentário da corrente entrada",
        "icon" => "multimeter",
        "icon_url" => $root . "multimeter.png",
        "id" => 164,
        "name" => "Random.corrente",
        "server" => 3,
        "unit" => "A"
    ];
} elseif ($id == 165) {
    $data = [
        "alias" => "Tensão saida",
        "comment" => "Comentário da tensão saida",
        "icon" => "multimeter",
        "icon_url" => $root . "multimeter.png",
        "id" => 165,
        "name" => "Random.tensao",
        "server" => 3,
        "unit" => "V"
    ];
}

header('Content-Type: application/json');
echo json_encode($data);
