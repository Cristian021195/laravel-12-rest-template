# Exceptions

Errores de negocio personalizados

```
class InsufficientStockException extends Exception
{
    protected $message = 'No hay stock suficiente';
}
if ($stock < $dto->quantity) {
    throw new InsufficientStockException();
}
```