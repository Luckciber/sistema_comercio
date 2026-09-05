<?php

namespace SistemaComercio\Clientes;

interface IClienteRepository
{
    public function guardar(Cliente $cliente): Cliente;
    public function actualizar(Cliente $cliente): void;
    public function obtenerPorId(int $id): ?Cliente;
    public function obtenerPorRut(string $rut): ?Cliente;

    /* Devuelve el objeto cliente */
    public function obtenerTodos(): array;
    public function eliminar(int $id): bool;
}
