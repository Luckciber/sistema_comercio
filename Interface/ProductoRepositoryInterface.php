<?php
declare(strict_types=1);

namespace Interface;

interface ProductoRepositoryInterface {
    public function guardar(array $productoData): int;
    public function obtenerPorId(int $id): ?array;
    public function listarTodos(): array;
}