# Resources

Responsabilidad: Resource → transformar salida JSON
Definir EXACTAMENTE cómo responde tu API.

Tu modelo interno NO debería ser igual a tu API pública.

Sin Resource `return User::first();`

Problemas:
- exponés campos sensibles
- cambios internos rompen frontend
- responses inconsistentes

Con Resource:

```
return [
    'id' => $this->id,
    'name' => $this->name,
];
```

Resource = traductor
Traduce a JSON público:
- modelos
- DTOs
- entidades
