import React from "react";
import Navbar from '../componentes/Navbar'
import Animal from '../componentes/Animal'
import Footer from '../componentes/Footer'



const animal=()=>{
    return(
        <div>
            <Navbar/>
            { <Animal/> }
            <Footer/>
        </div>
    )
}
export default animal