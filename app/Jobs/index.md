# Jobs

Procesamiento en segundo plano

**Casos típicos**
- Emails
- Facturación
- Integraciones externas
- Generación PDFs

```
class ProcessPaymentJob implements ShouldQueue
{
    public function __construct(
        public Order $order
    ) {}

    public function handle(PaymentService $paymentService)
    {
        $paymentService->charge($this->order);
    }
}
```