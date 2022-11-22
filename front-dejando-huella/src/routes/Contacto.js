import React from "react";
import Navbar from '../componentes/Navbar'
import Video from '../componentes/Video'
// import CardBoton from '../componentes/CardBoton'
import Footer from '../componentes/Footer'
import Formulario from '../componentes/Formulario'

const Contacto=()=>{
    return(
        <div>
            <Navbar/>
            <Video/>
            <Formulario/>
            {/* <CardBoton/> */}
            <Footer/>
        </div>
    )
}
export default Contacto