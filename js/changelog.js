// DEFINICIÓN DE CONSTANTES CLASES Y FUNCIONES
const contenedor = document.getElementById("idContenedor");
const idPresentacion = "#presentacion";
const idColaboradores = "colaboradores";

class Colaborador {
  constructor(nombre, apellido, descripcion, url, urlImagen){
    this.nombre = nombre;
    this.apellido = apellido;
    this.descripcion = descripcion;
    this.url = url;
    this.urlImagen = urlImagen;
  }
  idString(){
    return "#" + this.nombre + this.apellido;
  }
  nombreApellido(){
    return this.nombre + " " + this.apellido;
  }
  generarCodigo(){
    const eleContenedor = document.getElementById(idColaboradores);
    const eleDiv = document.createElement("div");
    const codigo =`
      <div class="thumbnail">
      <img class="imgColaborador" id= "` + this.nombre+this.apellido + `" src="`+ this.urlImagen + `" alt="`+ this.nombreApellido() +`">
      <div class="caption tarjeta">
        <h3>` + this.linkUrl() + `</h3>
        <p>` + this.descripcion + `</p>          
      </div>
      </div>
    `;
    eleDiv.innerHTML = codigo;
    eleDiv.classList.add("col-xs-12", "col-sm-6","col-md-4");
    eleContenedor.appendChild(eleDiv);
  }
  linkAId(){
    return `<a href="` + this.idString() + `" title="` + this.nombreApellido() + `">` + this.nombreApellido() + `</a>`;
  }
  elementoLinkLocal(){
    return crearElementoLink(this.nombreApellido(), this.idString(), this.nombreApellido());
  }
  linkUrl(){
    return `<a href="` + this.url + `" title="` + this.nombreApellido() + `">` + this.nombreApellido() + `</a>`;
  }

}

class DescripcionColaboracion {
  constructor(descripcion, colaboradores){
    this.descripcion = descripcion;
    this.colaboradores = colaboradores;
  }
  generarCodigoItem(){
    const eleItem = document.createElement("li");
    const eleP = document.createElement("p");
    eleP.innerHTML = this.descripcion + this.generarCodigoColabores();
    eleItem.appendChild(eleP);
    console.log("contenido elemento: " + eleItem.innerHTML);
    return eleItem;
  }
  generarCodigoColabores(){
    var cadena = "";
    if (this.colaboradores.length != 0){
      cadena = "(" + this.colaboradores[0].linkAId();
      for (var i = 1; i<this.colaboradores.length; i++){
        cadena +=  ", " + this.colaboradores[i].linkAId();
      }
    cadena += ")";
    }
    return cadena;
  }
  
}

function agregarCambio(unTitulo, unaUrl, unaFechaIso, unasDescripciones) {
  var cambio = {
    titulo: unTitulo,
    urlRelease: unaUrl,
    fecha: new Date(unaFechaIso),
    descripciones: unasDescripciones,
    agregarDescripciones : function(){
      this.descripciones.forEach(agregarDescripcion);
    },
    fechaLocal: function(){
      return this.fecha.toLocaleDateString();
    },
    tituloConFecha: function(){
      return cambio.titulo + " (" + this.fechaLocal() + ")";
    },
    tituloLinkSeguro(){
      return (cambio.urlRelease != idPresentacion) ? "Link Github Release " + cambio.tituloConFecha()
      : "Inicio"
    }
    
  }
  if (cambio.urlRelease == "") cambio.urlRelease = idPresentacion;

  const eleDiv = document.createElement("div");
  eleDiv.appendChild(armarTitulo(cambio));
  eleDiv.appendChild(armarListaCambios(cambio.descripciones));
  
  contenedor.appendChild(document.createElement("hr"));
  contenedor.appendChild(eleDiv);  
}

function armarTitulo(cambio){
  const eleTitulo = document.createElement("h4");
  eleTitulo.appendChild(crearElementoLink(cambio.tituloLinkSeguro(), cambio.urlRelease, cambio.titulo));
  return eleTitulo;
}

function armarListaCambios(descripciones){
    const eleLista = document.createElement("ol");
    var i;
    for (i = 0; i < descripciones.length; i++) {
        eleLista.appendChild(descripciones[i].generarCodigoItem());
    }
    return eleLista;
}

function armarElementoLista(descripcion){
    const eleItem = document.createElement("li");
    eleItem.innerText = descripcion;
    return eleItem;
}

function crearElementoLink(titulo, link, texto){
  const eleLinkTitulo = document.createElement("a")
  const tituloTxt = document.createTextNode(texto);
  eleLinkTitulo.appendChild(tituloTxt);
  eleLinkTitulo.title = titulo;
  eleLinkTitulo.href = link;
  return eleLinkTitulo;
}

// INSTANCIAS DE COLABORADORES
const luisDuran = new Colaborador("Luis", "Duran", "Docente de Computación", "https://github.com/luchoxx87", "https://avatars.githubusercontent.com/u/26579253?v=4");
const agustinSantich = new Colaborador("Agustin", "Santich", "Egresado Computación 2018", "https://github.com/AgusstinnS", "https://avatars.githubusercontent.com/u/29802627?v=4");
const danielUmiri = new Colaborador("Daniel", "Umiri", "Egresado Computacion 2018", "#DanielUmiri", "https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png");
const jonathanVelazquez = new Colaborador("Jonathan", "Velazquez", "Docente de Computación", "https://github.com/jonathanvgms", "https://avatars.githubusercontent.com/u/7192115?v=4");

// INVOCACIÓN CAMBIOS

/*agregarCambio("v2.x", "...", "2021-05-31",
  [new DescripcionColaboracion("Implementación hoja de estilos para especialidades.", [luisDuran]),
  new DescripcionColaboracion("Corrección responsive changelog", [luisDuran, jonathanVelazquez])]
);*/

agregarCambio("v2.2", "https://github.com/et12webmaster/et12webmaster.github.io/releases/tag/2.2", "2021-05-31",
  [new DescripcionColaboracion("Agregada página de changelog.", [luisDuran]),
  new DescripcionColaboracion("Componentes JS de Cambios y Colaboradores.", [luisDuran])]
);

agregarCambio("v2.1", "https://github.com/et12webmaster/et12webmaster.github.io/releases/tag/2.1", "2021-05-29",
  [new DescripcionColaboracion("Implementación de componentes reutilizables en js.", [luisDuran]),
  new DescripcionColaboracion("Se corrigieron algunos errores.", [luisDuran, jonathanVelazquez]),
  new DescripcionColaboracion("Minificación de librerías.", [jonathanVelazquez])]
);

agregarCambio("v2.0", "", "2018-07-25",
  [new DescripcionColaboracion("Implementación de sitio estático responsive.", [agustinSantich, danielUmiri])]
);

agregarCambio("1.0", "", "2007-06-15",
  [new DescripcionColaboracion("Primera versión del sitio con php en un hosting gratuito, si sabes buscar capaz encuentres algo.", [])]
);
luisDuran.generarCodigo();
agustinSantich.generarCodigo();
danielUmiri.generarCodigo();
jonathanVelazquez.generarCodigo();