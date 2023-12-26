export class M_menu_inicio {
    constructor(controller) {
        this.controlador = controller
    }

    cambiarVista(abrirVista, cerrarVista) {
        cerrarVista.style.display = "none"
        abrirVista.style.display = "block"
    }
}
