# DTOs (Data Transfer Object)

Responsabilidad: DTO → transportar datos estructurados
Transportar datos de manera tipada y clara.

Problema típico sin DTO
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

Con DTO

```
new CreateUserDTO(
    name: 'Juan',
    email: 'juan@test.com',
);
```

Beneficios:
- ✅ tipado
- ✅ claridad
- ✅ autocomplete
- ✅ contratos claros
- ✅ menos errores
- ✅ más mantenible