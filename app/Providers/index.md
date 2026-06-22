# Provider

Registro de dependencias.

**Responsabilidad**
Configurar el contenedor de servicios.

```
public function register()
{
    $this->app->bind(
        OrderRepositoryInterface::class,
        OrderRepository::class
    );
}

// luego laravel puede inyectar

public function __construct(
    OrderRepositoryInterface $repository
)
```