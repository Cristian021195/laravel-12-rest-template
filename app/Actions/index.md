# Actions

Representa un caso de uso concreto. Un Action = un caso de uso.

```
class CreateOrderAction
{
    public function __construct(
        private OrderService $service
    ) {}

    public function execute(CreateOrderDTO $dto): Order
    {
        return $this->service->create($dto);
    }
}

// or: CreateOrderAction, CancelOrderAction, ApproveOrderAction
```