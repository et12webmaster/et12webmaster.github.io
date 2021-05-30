const contenedor = document.getElementById("idContenedor");
const idPresentacion = "#presentacion";

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
  const eleLinkTitulo = document.createElement("a")
  const tituloTxt = document.createTextNode(cambio.tituloConFecha());
  eleLinkTitulo.appendChild(tituloTxt);
  eleLinkTitulo.title = (cambio.urlRelease != idPresentacion) ? "Link Github Release " + cambio.tituloConFecha()
    : "Inicio";
  eleLinkTitulo.href = cambio.urlRelease;
  eleTitulo.appendChild(eleLinkTitulo);
  return eleTitulo;
}

function armarListaCambios(descripciones){
    const eleLista = document.createElement("ul");
    var i;
    for (i = 0; i < descripciones.length; i++) {
        eleLista.appendChild(armarElementoLista(descripciones[i]));
    }
    return eleLista;
}

function armarElementoLista(descripcion){
    const eleItem = document.createElement("li");
    eleItem.innerText = descripcion;
    return eleItem;
}

agregarCambio("v2.1", "https://github.com/et12webmaster/et12webmaster.github.io/releases/tag/2.1", "2021-05-29",
  ["Componentes html comunes a todas las paginas se implementaron como componentes reutilizables en js.", "Se corrigieron algunos errores.", "Minificación de librerías."]);

agregarCambio("v2.1", "", "2018-07-25",
  ["Implementación de sitio estático responsive"]);

agregarCambio("1.0", "", "2007-06-15",
  ["Primera versión del sitio con php en un hosting gratutio, si sabes buscar capaz encuentres algo."])