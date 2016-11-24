# `API Programación avanzada II`
#### `Entities`
#### Token
```
{
    "token": "2039224e-a335-4d62-a1f1-895257c52517"
}
```
#### Usuario
```
{
    "usuario": "martin",
    "nombre": "Martin Benvenuti",
    "email": "a@a.com"
}
```
#### MensajeRecibido
```
{
    "id": 3,
    "titulo": "Primer mensaje del user dos",
    "cuerpo": "Este es un mensaje de prueba a ver si anda o no",
    "fecha": 1479582139000,
    "leido": false,
    "emisor": {
        "usuario": "german",
        "nombre": "German Gianotti",
        "email": "b@b.com"
    },
    "receptores": [
        {
            "usuario": "martin",
            "nombre": "Martin Benvenuti",
            "email": "a@a.com"
        }
    ]
}
```
#### MensajeEnviado
```
{
    "id": 1,
    "titulo": "Primer mensaje",
    "cuerpo": "Este es un mensaje de prueba a ver si esto anda.",
    "fecha": 1479582139000,
    "receptores": [
        {
            "usuario": "german",
            "nombre": "German Gianotti",
            "email": "b@b.com"
        },
        {
            "usuario": "pablo",
            "nombre": "Pablo Fino",
            "email": "c@c.com"
        },
        {
            "usuario": "seba",
            "nombre": "Sebastian Soler",
            "email": "d@d.com"
        }
    ]
}
```
#### `Endpoints`

#### /register
```
METHOD: POST
Content-type: JSON
Expected params: 
    *nombre (String)
    *usuario (String)
    *password (String)
    *email (String)
    *pais (String)
    *ciudad (String)
    *provincia (String)
    *telefono (String)
    *direccion (String)
Response headers:
    *Location:  new resource location
```
#### /login
```
METHOD: POST
Content-type: JSON
Expected params: 
    *usuario (String)
    *password (String)
Response content:
    *token (Token)
```
#### /logout
```
METHOD: *
Content-type: JSON
Expected headers: 
    *token (Token)
```
#### /api/usuarios/
```
METHOD: GET
Content-type: JSON
Expected headers: 
    *token (String)
Response content:
    *usuarios (Array<Usuario>)
```
#### /api/usuarios/{id}
```
METHOD: GET
Content-type: JSON
Expected headers: 
    *token (String)
Expected params:
    *id (int)
Response content:
    *usuario (Usuario)
```
#### /api/mensajes/enviados
```
METHOD: GET
Content-type: JSON
Expected headers: 
    *token (String)
Response content:
    *mensajes (Array<MensajeEnviado>)
```
#### /api/mensajes/recibidos
```
METHOD: GET
Content-type: JSON
Expected headers: 
    *token (String)
Response content:
    *mensajes (Array<Mensaje>)
```
#### /api/mensajes/{id}
```
METHOD: GET
Content-type: JSON
Expected headers: 
    *token (String)
Expected params:
    *id (int)
Response content:
    *mensaje (Mensaje)
```
#### /api/mensajes/
```
METHOD: POST
Content-type: JSON
Expected headers: 
    *token (String)
Expected params:
    *titulo (String)
    *cuerpo (String)
    *receptores (Array<String>)
Response headers:
    *Location:  new resource location
```
#### /api/mensajes/{id}
```
METHOD: DELETE
Content-type: JSON
Expected headers: 
    *token (String)
Expected params:
    *id (int)
```
