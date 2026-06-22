# Services
Responsabilidad: Service → lógica de negocio

El Service contiene las reglas reales del sistema.

Acá vive:
- ✅ lógica de negocio
- ✅ procesos
- ✅ transacciones
- ✅ coordinación entre modelos
- ✅ integraciones
- ✅ decisiones del dominio

```
class OrderService
{
    public function __construct(
        private OrderRepository $repository
    ) {}

    public function create(CreateOrderDTO $dto): Order
    {
        $order = $this->repository->create([
            'product_id' => $dto->productId,
            'quantity' => $dto->quantity,
            'status' => OrderStatusEnum::PENDING
        ]);

        ProcessPaymentJob::dispatch($order);

        return $order;
    }
}
```

Ej:
- crear usuario
- generar factura
- cancelar suscripción
- aplicar descuentos
- validar stock
- enviar notificaciones
- procesar pagos