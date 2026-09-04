<?php

use Cliente;

interface IClienteService
{
    public function crearCliente(string $rut, string $nombre, string $email): Cliente;
    public function modificarCliente(int $id, string $rut, string $nombre, string $email): Cliente;
    public function eliminarCliente(int $id): bool;

    public function obtenerClientePorId(int $id): ?Cliente;
    public function obtenerClientePorRut(string $rut): ?Cliente;
    /*retorna objetos de tipo Cliente */
    public function listarClientes(): array;

}