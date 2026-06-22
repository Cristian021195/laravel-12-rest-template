# Traits

Compartir comportamiento.

**Responsabilidad**
Reutilizar código transversal.

```
trait HasUuid
{
    protected static function bootHasUuid()
    {
        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });
    }
}

class Order extends Model
{
    use HasUuid;
}

```