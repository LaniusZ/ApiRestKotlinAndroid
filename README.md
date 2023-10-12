
# Consumir una API desde Android con Kotlin

Ejemplo de como consumir una api desde Kotlin




## API
Añadimos una api de ejemplo
[Ver Commit](https://github.com/LaniusZ/ApiRestKotlinAndroid/commit/a1d9d9f96f811e53f86b81e2ac71ac882fa0cb3e)

Y la desplegamos a algun servidor local o en la nuve donde pueda acceder publicamente nuestra app

#### Get all items

```http
  GET api.php
```

| Variable | Tipo     | Descripción                |
| :-------- | :------- | :------------------------- |
| `id` | `int` | Identificador del usuario |
| `name` | `string` |  Nombre del usuario |




## Como realizarlo

1.- Agrega los permisos de Internet a tu archivo AndroidManifest.xml para permitir que tu aplicación se comunique con la API a través de Internet.
[Ver Commit](https://github.com/LaniusZ/ApiRestKotlinAndroid/commit/57ed46ad30b05895f63cfd62fe72a8ca3186b9d3)

2.- Añade las dependencias de Retrofit y GSON en tu archivo build.gradle
[Ver Commit](https://github.com/LaniusZ/ApiRestKotlinAndroid/commit/2d437106299619059be1b4b4cd8252e5ed6cfeeb)

3.- Crear un modelo de datos en Kotlin que coincida con la estructura de la respuesta de la API. (existen varias maneras de realizarlo, tanto manual como herramientas (plugins o sitios web)
[Ver Commit](https://github.com/LaniusZ/ApiRestKotlinAndroid/commit/5247fc4c8229aad875f593c630109d1c2294ba1d)

4.- Crea una interfaz que defina el servicio de la API
[Ver Commit](https://github.com/LaniusZ/ApiRestKotlinAndroid/commit/abc97bfb880be9fb96ca14fa0c0523486566f332)

5.- Finalmente en tu actividad o fragmento, crea una instancia de Retrofit y una instancia del servicio web, en este caso ApiService.
[Ver Commit](https://github.com/LaniusZ/ApiRestKotlinAndroid/commit/8cfdee2397d5963fb73fa1f618863aa9ba26d871)

Con estos pasos, tu aplicación Android debería ser capaz de consumir los datos proporcionados por el servicio PHP a través de Retrofit y mostrarlos o procesarlos según sea necesario.