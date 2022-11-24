import React from "react";
import Navbar from '../componentes/Navbar'
import Video from '../componentes/Video'
import CardBoton from '../componentes/CardBoton'
import Carrousel from '../componentes/Carrousel'
import Footer from '../componentes/Footer'
import UltimosMiembros from '../componentes/UltimosMiembros'
import Blog from "../componentes/Blog";

const Inicio=()=>{
    return(
        <div>
            <Navbar/>
            <Video/>
            <CardBoton/>
            <Carrousel />
            <UltimosMiembros/>
            <Blog />
            <Footer/>
        </div>
    )
}
export default Inicio