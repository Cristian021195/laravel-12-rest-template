# DTOs (Data Transfer Object)

DTO → transportar datos estructurados. Transportar datos de manera tipada y clara.

***Problema típico sin DTO***
```
createUser([
    'name' => 'Juan',
    'email' => 'juan@test.com',
]);
```

Problemas:
- arrays mágicos
- errores de keys
- difícil autocomplete
- difícil mantener

***Con DTO***

```
new CreateUserDTO(
    name: 'Juan',
    email: 'juan@test.com',
);
```

```
class CreateOrderDTO
{
    public function __construct(
        public int $productId,
        public int $quantity,
        public string $paymentMethod
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            productId: $data['product_id'],
            quantity: $data['quantity'],
            paymentMethod: $data['payment_method']
        );
    }
}
```

**Beneficios:**
- Evita pasar arrays por toda la aplicación.
- Tipado
- Claridad
- Autocomplete
- Contratos claros
- Menos errores
- Más mantenible