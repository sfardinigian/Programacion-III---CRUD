# Análisis y Diseño

## Base de datos:

### Tabla **Películas**:
- ID (PRIMARY KEY, INT)
- NOMBRE (VARCHAR(50))
- GÉNERO (VARCHAR(50))
- AÑOPUBLI (INT)
- DIRECTOR (VARCHAR(50))
- ID_G (FOREIGN KEY, INT)
- ID_D (FOREIGN KEY, INT)

### Tabla **Géneros**:
- ID (PRIMARY KEY, INT)
- NOMBRE (VARCHAR(50))

### Tabla **Director**:
- ID (PRIMARY KEY, INT)
- NOMBRE (VARCHAR(50))
- APELLIDO (APELLIDO(50))
- FECNAC (DATE)
- NACIONALIDAD (VARCHAR(50))

*Ideas de consultas:*  
SELECT nombre FROM peliculas WHERE director = ?