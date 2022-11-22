import React from "react";
import Navbar from '../componentes/Navbar'
import Video from '../componentes/Video'
import CardBoton from '../componentes/CardBoton'
import Footer from '../componentes/Footer'
import UltimosMiembros from '../componentes/UltimosMiembros'

const Inicio=()=>{
    return(
        <div>
            <Navbar/>
            <Video/>
            <CardBoton/>
            <UltimosMiembros/>
            <Footer/>
        </div>
    )
}
export default Inicio