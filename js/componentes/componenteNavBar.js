class BarraNavegacion extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    this.innerHTML = `
<div id="wrapper">
    <div class="overlay"></div>
    <nav class="barra" id="menu">
      <span class="notitle" id="titlenav">E.T. N°12 Lib. Gral. Jose de San Martín</span>
    </nav>
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
      <ul class="nav sidebar-nav">

        <li class="sidebar-brand">
          <div>
            <a href="index.html" style="z-index:-99!important;"> <img class="Logo" src="imgs/et12.png" width="90"> </a>
          </div>
        </li>

        <li class="submenu">
          <a href="especialidades.html">Especialidades</a>
        </li>

        <li class="submenu">
          <a href="historia.html">Historia</a>
        </li>

        <li class="submenu">
          <a href="convivencia.html">Convivencia</a>
        </li>
        
        <li class="submenu">
          <a href="autoridades.html">Autoridades</a>
        </li>

        <li class="submenu">
          <a href="inscripcion.html">Inscripciones</a>
        </li>

        <li class="submenu">
          <a href="https://www.tec12radio.com/" target="_blank">Radio &nbsp &nbsp<i class="fa fa-external-link"></i></a>
        </li>

      </ul>
    </nav>

    <div id="hamburgesa">
      <button type="button" class="hamburger is-closed" data-toggle="offcanvas" style="z-index:9999!important;">
        <span class="hamb-top"></span>
        <span class="hamb-middle"></span>
        <span class="hamb-bottom"></span>
      </button>
    </div>
  </div>
  `;
  }
}
customElements.define('nav-component', BarraNavegacion);