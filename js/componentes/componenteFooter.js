class Footer extends HTMLElement {
    constructor() {
      super();
    }
  
    connectedCallback() {
        this.innerHTML = `
        <footer>
            <div class="footer">
            <br>
            <p>Escuela Técnica N°12 Gral. José de San Martín <a href="changelog.html" title="Changelog">(v2.2.1)</a></p>
            <p>Página creada y diseñada por alumnos de 6° año Computación 2018</p>
            <a href="https://www.facebook.com/jose.desanmartin.927" id="fbIco" class="fab fa-facebook fa-3x"
                title="Facebook Oficial de la Escuela" target="_blank"></a>
            <a href="https://www.instagram.com/escuelatec12/" id="instaIco" class="fab fa-instagram fa-3x"
                title="Instagram Oficial de la Escuela" target="_blank"></a>
            <a href="https://github.com/et12webmaster/et12webmaster.github.io" id="githubIco" class="fab fa-github fa-3x"
                title="Repositorio del Sitio" target="_blank"></a>
            </div>            
        </footer>
        `;
    }
}
customElements.define('footer-component', Footer);