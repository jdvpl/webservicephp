# webservicephp

### carpeta config
`
se crea la clase para conectar a la base de datos
`

### carpeta models

`aca se define el select toda la parte para la consulta a la base de datos`

### carpeta controllers

` se hacen los switch case para hacer los endpoint a la base de datos`


### url para todas las categorias

`http://localhost:84/webservicephp/controllers/categoria.php?op=GetAll`

### para obtener solo una categoria

#### debe ser por metodo post para enviar un parametro por el body tipo json EJEMPLO:


`
Tipo Post en la url:
http://localhost:84/webservicephp/controllers/categoria.php?op=GetId

envia la cat_id y retorna
{
    "cat_id":1
}
`

### insertando categoria

#### metodo post se pasan los parametros por el json ejemplo:

`
url
http://localhost:84/webservicephp/controllers/categoria.php?op=add

{
    "cat_nom":"saitama",
    "cat_obs":"kaisoku ni naru otoko dese",
    "est":0
}

`




