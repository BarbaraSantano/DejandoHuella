import React from "react";
import Navbar from '../componentes/Navbar'
import Gato from '../componentes/Gato'
import CardBoton from '../componentes/CardBoton'
import Footer from '../componentes/Footer'
// import Perro from '../componentes/Perro'

const Gatos=()=>{
    return(
        <div>
            <Navbar/>
            <CardBoton/>
             <Gato/> 
             {/* <Perro/>  */}
            <Footer/>
        </div>
    )
}
export default Gatos