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
hugo server -D --renderToMemory
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

#### .frontmatter

Esta carpeta contiene archivos que facilitan la gestión del proyecto desde Frontmatter. [Más información](https://gohugo.io/content-management/front-matter/)

#### .vscode

Al igual que la carpeta anterior, esta tiene archivos dedicados a las configuraciones necesarias para la ejecución del proyecto en Visual Studio Code. 

#### Content

Esta carpeta se integra de todo el **contenido** estructurado en **secciones** que se mostrará dentro de la página web. Dentro de un proyecto desarrollado con Hugo es necesario que el contenido sea organizado en las **secciones** en las que se pretende dividir el mismo. 
Cada carpeta de sección tiene dentro un archivo *_index.md*, el cual tiene el contenido que se verá reflejado finalmente en el sitio web. [Más información](https://gohugo.io/content-management/sections/)

* Carpetas de secciones en este proyecto: Contacto, Convivencia, Deportes, Especialidades, Historia, Inscripciones, Novedades.

#### Data

Esta carpeta contiene *datos dinámicos* *estructurados*; es decir, que tienen un formato y estructura fija el cual siempre siguen y que además suelen variar a través del tiempo, como por ejemplos en caso de "Abanderados". En este proyecto, estos archivos son de tipo *.json*. Hay dos razones principales por las cuales esta función nos resulta útil:
* Nos permite administrar los datos del sitio de manera centralizada, sin tener que buscarlos y cambiarlos en cada una de las secciones. 
* Nos da la característica de un sitio semi-dinámico en un sitio que es estático. [Más información](https://gohugo.io/methods/site/data/)


#### Archetypes

La carpeta "Archetypes" es una **plantilla** prediseñada para crear nuevos **contenidos** de forma estrucutrada y consistente. Estás plantillas contienen campos y valores predefinidos en los que se puede personalizar al crear un nuevo contenido, eso ayuda a mantener la coherencia del estilo y la estructura de los diferentes elementos del sitio web. [Más información](https://gohugo.io/content-management/archetypes/)

#### Layouts

La carpeta de layouts contiene plantillas para transformar contenido, datos y recursos en un sitio web completo, una plantilla es un archivo HTML con acciones de plantillas (estructuras de control delimitadas por “{{" and “}}"). 

##### Partials

Las plantillas parciales son un tipo especial de plantilla que se utilizan para abarcar varios elementos de nuestro sitio web, te ayudan a hacer tu sitio web más modular. Digamos, puedo hacer una plantilla parcial para un encabezado (header) o pie de pagina de un sitio web y lo podemos escribir en su propio archivo con su propio HTML separado y luego tomas ese HTML e inyectas en alguna otra plantilla. Para llamarlo, es asi:

```go
{{ partial "partial" .}}
```
El . es el alcance del archivo actual, representa el alcance de todas las variables a las que tengo acceso
[Más información](https://gohugo.io/templates/partials/)

##### Shortcodes

Un shortcode es un fragmento simple dentro de un archivo de contenido que Hugo representará usando una plantilla predefinida. Tenga en cuenta que los códigos cortos no funcionarán en archivos de plantilla. Si necesita el tipo de funcionalidad directa que proporcionan los códigos cortos pero en una plantilla, lo más probable es que desee una plantilla parcial .

Además de un Markdown más limpio, los códigos cortos se pueden actualizar en cualquier momento para reflejar nuevas clases, técnicas o estándares. En el momento de la generación del sitio, los códigos cortos de Hugo se fusionarán fácilmente en sus cambios. Evita una operación de búsqueda y reemplazo posiblemente complicada.

Son básicamente como pequeños fragmentos de código que puedes colocar dentro de tus archivos Markdown para no tener que escribir HTML feo y demás. Es parecido al partial solo que el shortcode si recibe parámetros. En content se están utilizando los `shortcodes` de relearn, es como una cascara ya hecha para nuestra pagina con un conjunto de pequeños códigos. Markdown es como HTML pero para tontos.
[Más información](https://gohugo.io/templates/shortcode-templates/)

#### Resources
Este archivo contiene estilos CSS que definen el aspecto y diseño de las diferentes secciones de la página.


#### Static
En esta carpeta derivan otras tres carpetas mas, cada una contiene lo siguiente:

##### Css

Contiene archivos .css definen el aspecto de los botones "compartir.css" y el tema de la pagina. (Se desconoce las funcionalidades de los archivos "autoridades.css" y "changelog.css" porque también se ubican en la carpeta "resources", no comparten el mismo código pero si la misma función)

##### Imgs

En la carpeta de imágenes, contiene archivos .png, .jpg y .svg sueltos, los cuales sirven para fondos, banners y logos en la pagina. Entre ellos se destacan, el logo de la escuela, imágenes de la Plaza San Martin, y el exterior del colegio, lo demás son imágenes genéricas para decorar, que representan las 3 especialidades que tiene el colegio para ofrecer: Electrónica, Electricidad y Computación.

##### Pdf

Archivos: Computación, Electricidad y Electrónica
En esta carpeta se encuentran los PDF's descriptivos de el plan de estudio de cada una de las especialidades de la escuela: hablando de sus propósitos generales, el contenido que conlleva cada especialidad, los objetivos de la asignatura, etc. 


[Más información](https://gohugo.io/content-management/static-files/)

### Otras aclaraciones

Dentro de la carpeta _partials_ está el `partial` "fecha.html", el cual se encarga de obtener del metadato fecha de la sección de la página para colocarla en el cuerpo de la misma. La fecha aparece solo si dicho apartado tiene el metadato PubishDate o Date. Es por eso que es importante que a la hora de crear apartados nuevos **solo poner estos metadatos en secciones que lo ameriten**, como artículos, por ejemplo. 

