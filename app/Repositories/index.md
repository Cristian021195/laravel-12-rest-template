# Repositories

Abstrae el acceso a datos. Toda la interacción con la BD

```
class OrderRepository
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
```