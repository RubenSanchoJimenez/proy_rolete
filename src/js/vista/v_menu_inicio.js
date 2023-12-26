export class V_menu_inicio{

    constructor(controller){

        this.controlador = controller
    
        this.main_menu = document.getElementById('menu_inicio')
        this.main_inicio_sesion = document.getElementById('inicio_sesion')
        this.boton_menu = this.main_menu.getElementsByTagName('button')[0]
        this.boton_inicio_sesion = this.main_inicio_sesion.getElementsByTagName('button')[0]

        this.boton_menu.addEventListener('click', () => this.cambiarVista(this.main_inicio_sesion, this.main_menu))
        this.boton_inicio_sesion.addEventListener('click', () => this.cambiarVista(this.main_menu, this.main_inicio_sesion))
    }

    cambiarVista(abrirVista, cerrarVista) {
        this.controlador.cambiarVista(abrirVista, cerrarVista)
    }
}