# Policies

Autorización.

**Responsabilidad:**
Responde a la pregunta: ¿Puede este usuario hacer esta acción?

```
class OrderPolicy
{
    public function update(User $user, Order $order): bool
    {
        return $user->id === $order->user_id;
    }
}

$this->authorize('update', $order);
```