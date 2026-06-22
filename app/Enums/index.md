# Enums

Estados o valores limitados. Evita strings mágicos.

```
enum OrderStatusEnum: string
{
    case PENDING = 'pending';
    case PAID = 'paid';
    case CANCELLED = 'cancelled';
}

$order->status = OrderStatusEnum::PAID;
```