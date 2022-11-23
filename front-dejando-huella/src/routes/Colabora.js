import React from "react";
import Navbar from '../componentes/Navbar'
import CardBoton from '../componentes/CardBoton'
import Footer from '../componentes/Footer'


const colabora=()=>{
    return(
        <div>
            <Navbar/>
            { <CardBoton/> }
            <Footer/>
        </div>
    )
}
export default colabora