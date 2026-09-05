<?php

namespace SistemaComercio\Clientes;

abstract class ClienteRepositoryCreator
{
    abstract public function crearRepositorio(): IClienteRepository;
}
