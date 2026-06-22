# Helpers

Funciones utilitarias.

```
class CurrencyHelper
{
    public static function format(float $amount): string
    {
        return '$' . number_format($amount, 2);
    }
}

CurrencyHelper::format(1500); // $1,500.00
```