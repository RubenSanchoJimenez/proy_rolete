import { M_menu_inicio } from "../modelo/m_menu_inicio.js"
import { V_menu_inicio } from "../vista/v_menu_inicio.js"

console.log("Controlador cargado")

class Controlador{

    constructor() {
        this.modelo = new M_menu_inicio(this)
        this.vista = new V_menu_inicio(this)
    }

    cambiarVista(abrirVista, cerrarVista) {
        this.modelo.cambiarVista(abrirVista, cerrarVista)
    }

}

let controlador = new Controlador()