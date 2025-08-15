# Análisis y Diseño

## Base de datos:

### Tabla **Películas**:
- ID (PRIMARY KEY, INT)
- NOMBRE (VARCHAR(50))
- AÑOPUBLI (INT)
- ID_G (FOREIGN KEY, INT)
- ID_D (FOREIGN KEY, INT)
- DESCRIPCIÓN (TEXT(1000))

### Tabla **Géneros**:
- ID (PRIMARY KEY, INT)
- NOMBRE (VARCHAR(50))

### Tabla **Director**:
- ID (PRIMARY KEY, INT)
- NOMBRE (VARCHAR(50))
- APELLIDO (APELLIDO(50))
- FECNAC (DATE)
- NACIONALIDAD (VARCHAR(50))

## Ideas de consultas:  
### SELECT nombre FROM peliculas WHERE director = ?
Nos muestra los nombres de las películas de un director en específico.
### SELECT * FROM peliculas WHERE genero = ?
Nos muestra todas las películas de un género en específico.