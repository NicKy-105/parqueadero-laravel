# Tarea - Desarrollo en Plataformas

**Estudiante:** Doménica Arcos  
**Fecha:** 16 de diciembre de 2024  
**Paralelo:** 2

---

## Mis Decisiones de Diseño

### 1. Tabla

**Nombre de la tabla:** `vehiculos`

**Campos:**

| Campo | Tipo | ¿Obligatorio? |
|-------|------|---------------|
| `id` | BIGINT (AUTO_INCREMENT) | Sí |
| `placa` | VARCHAR(10) | Sí |
| `tipo` | VARCHAR(20) | Sí |
| `propietario` | VARCHAR(100) | No |
| `observaciones` | TEXT | No |
| `created_at` | TIMESTAMP | Sí (automático) |
| `updated_at` | TIMESTAMP | Sí (automático) |

---

### 2. Tipos de vehículo

- **Automóvil**: Vehículos de cuatro ruedas estándar
- **Motocicleta**: Vehículos de dos ruedas
- **Camioneta**: Vehículos tipo SUV o pickup

---

### 3. ¿Se puede eliminar registros?

**Respuesta:** Sí

**Razón:** Cuando un vehículo sale del parqueadero, su registro se elimina porque no se requiere mantener historial de salidas.
