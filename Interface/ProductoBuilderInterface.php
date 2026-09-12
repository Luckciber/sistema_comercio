<?php
declare(strict_types=1);

namespace Interface;

interface ProductoBuilderInterface {
    public function setBasicInfo(int $id, string $nombre, string $marca, string $tipo): self;
    public function setPrecio(float $precio, float $descuento): self;
    public function agregarCaracteristica(string $clave, string $valor): self;
    public function getProducto();
}