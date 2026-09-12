<?php
declare(strict_types=1);

namespace Implement;

class Producto {
    public function __construct(
        public readonly int $id,
        public readonly string $nombre,
        public readonly string $marca,
        public readonly string $tipoProducto,
        public readonly float $precio,
        public readonly float $descuento,
        public readonly array $caracteristicas = []
    ) {}
}