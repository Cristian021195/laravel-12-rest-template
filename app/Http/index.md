# HTTP
Contiene Controllers, Requests, Middleware, Resources, etc.

**Responsabilidad**
- Recibir la request.
- Validar.
- Delegar lógica.

```
class OrderController extends Controller
{
    public function store(
        CreateOrderRequest $request,
        CreateOrderAction $action
    ) {
        $order = $action->execute(
            CreateOrderDTO::fromArray($request->validated())
        );

        return response()->json($order);
    }
}
```