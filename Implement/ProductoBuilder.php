<?php
declare(strict_types=1);

namespace Implement;

use Interface\ProductoBuilderInterface;

class ProductoBuilder implements ProductoBuilderInterface {
    private int $id;
    private string $nombre;
    private string $marca;
    private string $tipoProducto;
    private float $precio = 0.0;
    private float $descuento = 0.0;
    private array $caracteristicas = [];

    public function setBasicInfo(int $id, string $nombre, string $marca, string $tipo): self {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->marca = $marca;
        $this->tipoProducto = $tipo;
        return $this;
    }

    public function setPrecio(float $precio, float $descuento): self {
        $this->precio = $precio;
        $this->descuento = $descuento;
        return $this;
    }

    public function agregarCaracteristica(string $clave, string $valor): self {
        $this->caracteristicas[$clave] = $valor;
        return $this;
    }

    public function getProducto(): Producto {
        return new Producto(
            $this->id,
            $this->nombre,
            $this->marca,
            $this->tipoProducto,
            $this->precio,
            $this->descuento,
            $this->caracteristicas
        );
    }
}