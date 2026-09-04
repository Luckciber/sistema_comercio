<?php

use Cliente;
use IClienteRepository;
use IClienteService;

class ClienteService implements IClienteService
{
    public function __construct(private IClienteRepository $repository) {}

    public function crearCliente(string $rut, string $nombre, string $email): Cliente
    {
        if($this->repository->obtenerPorRut($rut) !== null)
        {
            throw new RuntimeException(
                "Ya Existe un cliente con ese RUT"
            );
        }
        
        $cliente = new Cliente(null, $rut, $nombre, $email);
        
        return $this->repository->guardar($cliente);
    }

    public function modificarCliente(int $id, string $rut, string $nombre, string $email): Cliente
    {
        $cliente = $this->repository->obtenerPorId($id);

        if($cliente === null)
        {
            throw new RuntimeException(
                "No existe un cliente con ese ID"
            );
        }
        
        $clienteConRut = $this->repository->obtenerPorRut($rut);
        if($clienteConRut !== null && $clienteConRut->getId() !== $id)
        {
            throw new RuntimeException(
                "Ya Existe un cliente con ese RUT"
            );
        }

        $cliente->actualizarDatos($rut, $nombre, $email);

        return $cliente;
    }

    
    public function eliminarCliente(int $id): bool
    {
        return $this->repository->eliminar($id);
    }

    public function obtenerClientePorId(int $id): ?Cliente
    {
        return $this->repository->obtenerPorId($id);
    }
    public function obtenerClientePorRut(string $rut): ?Cliente
    {
        return $this->repository->obtenerPorRut($rut);
    }

    /*retorna objetos de tipo Cliente */
    public function listarClientes(): array
    {
        return $this->repository->obtenerTodos();
    }
}
