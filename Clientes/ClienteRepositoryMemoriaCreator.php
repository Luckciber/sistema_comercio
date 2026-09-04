<?php

use ClienteRepositoryCreator;
use ClienteRepositoryMemoria;
use IClienteRepository;

class ClienteRepositoryMemoriaCreator extends ClienteRepositoryCreator
{
    public function crearRepositorio(): IClienteRepository
    {
        return new ClienteRepositoryMemoria();
    }
}