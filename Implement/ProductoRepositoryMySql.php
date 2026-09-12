<?php
declare(strict_types=1);

namespace Implement;

use Interface\ProductoRepositoryInterface;
use PDO;

class ProductoRepositoryMySql implements ProductoRepositoryInterface {
    private PDO $conexion;

    public function __construct(string $host, string $db, string $user, string $pass) {
        // Conexión estándar a WampServer (MySQL)
        $this->conexion = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
        $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function guardar(array $data): int {
        $sql = "INSERT INTO productos (nombre, marca, tipo_producto, precio, descuento, caracteristicas) VALUES (:nombre, :marca, :tipo, :precio, :descuento, :caracteristicas)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute([
            'nombre' => $data['nombre'],
            'marca' => $data['marca'],
            'tipo' => $data['tipo_producto'],
            'precio' => $data['precio'],
            'descuento' => $data['descuento'],
            'caracteristicas' => json_encode($data['caracteristicas'])
        ]);
        return (int) $this->conexion->lastInsertId();
    }

    public function obtenerPorId(int $id): ?array {
        $stmt = $this->conexion->prepare("SELECT * FROM productos WHERE id = ?");
        $stmt->execute([$id]);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado ? $resultado : null;
    }

    public function listarTodos(): array {
        $stmt = $this->conexion->query("SELECT * FROM productos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}