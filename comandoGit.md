Presiona `ctrl + shift + V` para visusalizar el documento

* * * 
# Subir cambios (push)
### Agregar un archivo a la rama
`git add` **`"archivo"`**

### Agrega todos los archivos modificados a la rama (dejarlos preparados para el commit)
`git add .`

### Crear instancia de cambio (checkpoint)
`git commit -m` **`"commentario"`**

### Ingresa los ultimos cambios al origen
`git push`

* * *
# Obtener cambios (pull)
### Traer repositorio remoto al local
`git pull (apodo repositorio remoto) (nombre de la rama)`
#### Normalmente es:
`git pull origin main`

* * *
# Utilidades
### Historial de cambios en repositorio remoto
`git log`

### Muestra las ramas disponibles
`git branch`

### Cambiar de rama
`git checkout` **`nombre de la rama`**
### Muestra los archivos nuevos o modificados que no tienen commit
`git status`

### Quita el archivo de la rama
`git reset` **`archivo`**

### Quita los archivos de la rama y el directorio.
`git rm`  **`archivo`**

### Revertir todo al ultimo commit
`git reset --hard`

### Clonar un repositorio ya creado de una URL
`git clone` `URL`

`git clone` `https://github.com/AscAngel/bookswap`