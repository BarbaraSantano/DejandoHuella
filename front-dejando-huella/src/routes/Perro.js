import React from "react";
import Navbar from '../componentes/Navbar'

import CardBoton from '../componentes/CardBoton'
import Footer from '../componentes/Footer'
import Perro from '../componentes/Perro'

const Perros=()=>{
    return(
        <div>
            <Navbar/>
            <CardBoton/>
            {/* <Formulario/> */}
            {/* <Gato/> */}
             <Perro/> 
            <Footer/>
        </div>
    )
}
export default Perros