# Curso
TALLER DE PROGRAMACION

## Integrantes
Ericson Junior Vargas Perez.

# ProyectoRestaurante
Proyecto Sistema de Gestion de Restaurantes que permita gestionar las operaciones del restaurante

###	Gestión de menú: Creación y actualización de platos y menús.
###	Gestión de órdenes: Registro de órdenes, tanto en el local como para delivery.
###	Reservas: Gestión de reservas de mesas.
###	Gestión de personal: Administración del personal y asignación de turnos.
###	Facturación: Generación de facturas y control de pagos.


## Estructura del Proyecto

### 1. Autenticación con Roles
**Clientes y Empleados**  
- **Laravel**: Se utilizará para la autenticación básica.  
- **OAuth**: Implementación de autenticación a través de Facebook y Google para clientes.  
- **Registro Manual de Empleados**: Los empleados serán registrados manualmente con roles específicos (admin, cocinero, mesero, cajero).

### 2. Gestor de Cuentas con Roles
- **CRUD de Usuarios**: Creación, lectura, actualización y eliminación de usuarios con asignación de roles.

### 3. Gestión de Mesas
- **CRUD de Mesas**: Los empleados pueden ver la disponibilidad y cambiar los estados de las mesas.
- **Estados de las Mesas**: *Disponible, Ocupada, Reservada, En Limpieza*.
- **Cambio de Estado Dinámico**: Por ejemplo, tras el pago, la mesa pasa a *Limpieza* y luego a *Disponible*.

### 4. Gestión de Reservas
- **Reservas de Clientes**: Los clientes pueden reservar mesas con fecha y hora específicas.
- **Visualización en Tiempo Real**: Los meseros pueden ver las mesas reservadas en tiempo real.

### 5. Gestión de Pedidos en Tiempo Real
- **Pedidos de Clientes**: Los clientes pueden hacer pedidos desde su mesa.
- **Visualización de Pedidos**: Los empleados (cocineros y meseros) pueden ver los pedidos en tiempo real.

### 6. Formulario de Pago e Impresión de Ticket
- **Registro de Pagos**: Los empleados pueden registrar pagos.
- **Generación de Tickets**: Se pueden generar tickets para imprimir.

---

## Módulos Principales
1. **Autenticación y Roles**: Gestión de usuarios y autenticación segura.  
2. **Gestión de Mesas**: Administración dinámica del estado de las mesas.  
3. **Gestión de Reservas**: Reservas en tiempo real y visualización para empleados.  
4. **Gestión de Pedidos**: Pedidos en tiempo real y seguimiento por parte del personal.  
5. **Pagos y Tickets**: Registro de pagos y generación de tickets.

---

## Tecnologías Utilizadas
- **Laravel**: Framework PHP para el desarrollo del backend.
- **Laravel Breeze/Jetstream**: Para la autenticación.
- **OAuth**: Para la autenticación con redes sociales.
- **Base de Datos MySQL**: Para el almacenamiento de datos.

---

## Beneficios Esperados
- **Eficiencia**: Mejora en la gestión de mesas y pedidos.  
- **Experiencia del Usuario**: Facilidad de uso para clientes y empleados.  
- **Seguridad**: Autenticación segura y gestión de roles.
- **Opcional**: agregacion de docker .

---

## Conclusión
Este proyecto tiene como objetivo principal proporcionar una solución integral para la gestión de un restaurante, mejorando la eficiencia y la experiencia del usuario. Con una estructura modular y un enfoque en la usabilidad y seguridad, el sistema está diseñado para satisfacer las necesidades tanto de los clientes como del personal del restaurante

