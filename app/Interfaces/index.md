# Interfaces


**Regla**
Tener interfaces para los Repositories suele ser suficiente. En arquitectura moderna normalmente se las encuentra en
```
Contracts/
├── Repositories/
│   ├── UserRepositoryInterface
│   └── OrderRepositoryInterface
│
├── Services/
│   └── PaymentGatewayInterface
│
└── Integrations/
    ├── MailProviderInterface
    ├── SmsProviderInterface
    └── StorageProviderInterface
```
***Usar cuando***
- Puede haber más de una implementación: Stripe, MPago, Paypal
- Quiero poder mockear fácilmente en tests.
- Estoy integrando infraestructura externa: Email, SMS, Storage, Cache, Payment
- Quiero desacoplar el dominio de Laravel/Eloquent: Crud simple. Action → Service → Repository → Model


El Service no sabe si los datos vienen de:
- MySQL
- PostgreSQL
- Redis
- API externa
- Mock para testing
Solo conoce el contrato.

```
interface OrderRepositoryInterface
{
    public function create(array $data): Order;

    public function findById(int $id): ?Order;
}

// implementación
class OrderRepository implements OrderRepositoryInterface
{
    public function create(array $data): Order
    {
        return Order::create($data);
    }

    public function findById(int $id): ?Order
    {
        return Order::find($id);
    }
}

// registro en provider
class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            OrderRepositoryInterface::class,
            OrderRepository::class
        );
    }
}

// uso 
class OrderService
{
    public function __construct(
        private OrderRepositoryInterface $repository
    ) {}
}
```