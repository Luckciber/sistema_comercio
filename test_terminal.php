<?php
declare(strict_types=1);

// 1. Cargamos manualmente las interfaces y clases necesarias
require_once __DIR__ . '/Interface/ProductoBuilderInterface.php';
require_once __DIR__ . '/Implement/Producto.php';
require_once __DIR__ . '/Implement/ProductoBuilder.php';

use Implement\ProductoBuilder;

echo "========================================\n";
echo " PRUEBA LOCAL DE GESTIÓN DE PRODUCTOS\n";
echo " Patrón Creacional: BUILDER\n";
echo "========================================\n\n";

try {
    // 2. Usamos el Patrón Builder para construir el producto paso a paso con características
    $builder = new ProductoBuilder();
    
    $producto = $builder->setBasicInfo(1, 'Notebook Gamer', 'Asus', 'Computación')
                        ->setPrecio(990000.0, 50000.0)
                        ->agregarCaracteristica('Procesador', 'Intel Core i7')
                        ->agregarCaracteristica('Memoria RAM', '16GB')
                        ->agregarCaracteristica('Almacenamiento', '512GB SSD')
                        ->getProducto();

    // 3. Mostramos los datos por la terminal para verificar el funcionamiento
    echo "[✔] Producto construido con éxito:\n";
    echo "ID: {$producto->id}\n";
    echo "Nombre: {$producto->nombre}\n";
    echo "Marca: {$producto->marca}\n";
    echo "Tipo: {$producto->tipoProducto}\n";
    echo "Precio Base: $" . number_format($producto->precio, 0, ',', '.') . "\n";
    echo "Descuento: $" . number_format($producto->descuento, 0, ',', '.') . "\n";
    echo "Precio Final: $" . number_format($producto->precio - $producto->descuento, 0, ',', '.') . "\n";
    
    echo "\nCaracterísticas del Producto (Lista dinámica):\n";
    foreach ($producto->caracteristicas as $clave => $valor) {
        echo "   - {$clave}: {$valor}\n";
    }

    echo "\n----------------------------------------\n";
    echo " ¡Prueba finalizada con éxito en consola!\n";
    echo "----------------------------------------\n";

} catch (\Exception $e) {
    echo "[X] Error durante la prueba: " . $e->getMessage() . "\n";
}