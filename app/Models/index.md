# Model

Responsabilidad: Model → representar datos/entidades
El Model representa una entidad del sistema. Representa una tabla
No debería contener lógica de negocio muy compleja.

**Responsabilidad:**
- Relaciones
- Casts
- Scopes

**Ejemplos:**
- User
- Product
- Order
- Invoice

**En Laravel normalmente:**
- representa una tabla
- maneja relaciones
- encapsula datos

***Diferencia importante***
- Model: Representa “qué es algo”.
- Service: Representa “qué hacemos con eso”.

```
class Order extends Model
{
    protected $fillable = [
        'product_id',
        'quantity',
        'status'
    ];
}
```