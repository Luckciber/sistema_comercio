<?php

namespace SistemaComercio\Clientes;

class ClienteRepositoryMemoriaCreator extends ClienteRepositoryCreator
{
    public function crearRepositorio(): IClienteRepository
    {
        return new ClienteRepositoryMemoria();
    }
}
