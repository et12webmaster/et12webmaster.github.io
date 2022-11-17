class Footer extends HTMLElement {
    constructor() {
      super();
    }
  
    connectedCallback() {
        this.innerHTML = `
        <footer>
            <div class="footer">
                <table> <tr>
                    <td class="footer-col1">
                        <div class="footer-info-block">
                            <div class="footer-info">
                                Av.Del Libertador 238 - CABA (1001)<br>
                                Tel: 4327-3942 / 4328-4433 <br>
                                Mail institucional: <a href="mailto:det_12_de1@bue.edu.ar?subject=Mail via web: " class="footer-link">det_12_de1@bue.edu.ar</a>
                            </div>
                        </div>
                    </td>

                    <td class="footer-col2">
                        <div class="footer-icon-block">
                            <a href="https://www.facebook.com/jose.desanmartin.927" id="fbIco" class="fab fa-facebook fa-3x footer-icon"
                                title="Facebook Oficial de la Escuela" target="_blank"></a>
                            <a href="https://www.instagram.com/escuelatec12/" id="instaIco" class="fab fa-instagram fa-3x footer-icon"
                                title="Instagram Oficial de la Escuela" target="_blank"></a>
                            <a href="https://github.com/et12webmaster/et12webmaster.github.io" id="githubIco" class="fab fa-github fa-3x footer-icon"
                                title="Repositorio del Sitio" target="_blank"></a>
                        </div>
                    </td>
                </tr> </table>
            </div>            
        </footer>
        `;
    }
}
customElements.define('footer-component', Footer);