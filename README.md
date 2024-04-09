<h1 align="center">E.T. Nº12 D.E. 1º "Libertador Gral. José de San Martín"</h1>
<p align="center">
  <img src="https://et12.edu.ar/imgs/computacion/vamoaprogramabanner.png">
</p>

# Sitio Web ET 1️⃣2️⃣

Estamos moviendo nuestro sitio al CMS Hugo

## Comenzando 🚀

Clonar el repositorio github, desde Github Desktop o ejecutar en la terminal o CMD:

```
git clone https://github.com/et12webmaster/et12webmaster.github.io
```

### Pre-requisitos 📋

- Golang (Go) 1.20.3 - [Descargar](https://go.dev/dl)
- Hugo Extended - [Instalación](https://gohugo.io/installation)

## Despliegue 📦

Ya con Golang y Hugo instalados y agregados al _PATH_, navega hasta el directorio _et12/_ y ejecuta en tu terminal

```bash
hugo serve -D
```

Para correr el sitio con los _drafts_ visibles.

## Construido con 🛠️

* [Visual Studio Code](https://code.visualstudio.com/#alt-downloads) - Editor de código.
* [Relearn](https://mcshelby.github.io/hugo-theme-relearn/) - Tema de Hugo

## Wiki 📖

Puedes encontrar mucho más de cómo utilizar este proyecto en nuestra [Wiki](https://github.com/tu/proyecto/wiki)

## Versionado 📌

Usamos [SemVer](http://semver.org/) para el versionado. Para todas las versiones disponibles, mira los [tags en este repositorio](https://github.com/ET12DE1Computacion/Fulbo12/tags).

## Autores ✒️

| Integrante        | Rol                   | User                                                    |
| :--------:        | :-:                   | :--:                                                    |
|    x              |           x           |           x                                             |

## Licencia 📄

Este proyecto está bajo la Licencia (Tu Licencia) - mira el archivo [LICENSE.md](LICENSE.md) para detalles

## Estructura del proyecto 
En este apartado, explicaremos el orden y la función de cada una de las carpetas que contiene el proyecto

#### Content
Esta carpeta se integra de todo el **contenido** estructurado en **secciones** que se mostrará dentro de la página web. Dentro de un proyecto desarrollado con Hugo es necesario que el contenido sea organizado en las **secciones** en las que se pretende dividir el mismo. 
Cada carpeta de sección tiene dentro un archivo *_index.md*, el cual tiene el contenido que se verá reflejado finalmente en el sitio web. [Más información](https://gohugo.io/content-management/sections/)

* Carpetas de secciones en este proyecto: Contacto, Convivencia, Deportes, Especialidades, Historia, Inscripciones, Novedades.

#### Data 
Esta carpeta contiene *datos dinámicos* para *archivos estructurados*; es decir, que tienen un formato fijo el cual siempre siguen y que además suelen variar a través del tiempo, como por ejemplos en caso de "Abanderados". En este proyecto, estos archivos son de tipo *.json*. Hay dos razones principales por las cuales esta función nos resulta útil:
* Nos permite administrar los datos del sitio de manera centralizada, sin tener que buscarlos y cambiarlos en cada una de las secciones. 
* Nos da la característica de un sitio semi-dinámico en un sitio que es estático. 

