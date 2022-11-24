
//import './App.css';
// import Navbar from './componentes/Navbar.jsx';
// import Video from './componentes/Video.jsx';
// import CardBoton from './componentes/CardBoton.jsx';
// import Carrousel from './componentes/Carrousel.jsx';
// import Animal from './componentes/Animal.jsx';
// import { Footer } from './componentes/Footer';
// import Conocenos from './componentes/Conocenos.jsx';
// import { Formulario } from './componentes/Formulario';
// import CookiesWeb from './componentes/CookiesWeb.jsx';
// import Empresas from './componentes/Empresas';
import Inicio from "./routes/Inicio"
import Contacto from "./routes/Contacto"
import Colabora from "./routes/Colabora"
import Conocenos from "./routes/Conocenos"
import Perro from "./routes/Perro"
import Gato from "./routes/Gato"
import {Route,Routes} from 'react-router-dom';
import Boton from "./componentes/Boton"
import Tarjetagatos from "./routes/Tarjetagato"
import Tarjetaperros from "./routes/Tarjetaperro"
function App() {
  return (

    <>
    <Routes>
      <Route path="/" element={<Inicio/>}/>
      <Route path="/perro" element={<Perro/>}/>
      <Route path="/gato" element={<Gato/>}/>
      <Route path="/contacto" element={<Contacto/>}/>
      <Route path="/conocenos" element={<Conocenos/>}/>
      <Route path="/colabora" element={<Colabora/>}/>
      <Route path="/tarjetagato" element={<Tarjetagatos/>}/>
      <Route path="/tarjetaperro" element={<Tarjetaperros/>}/>    
    </Routes>
    </>
    // <div className="App">
    //   <Navbar />
    //   <Video />
    //   <h2>Si no puedes adoptar, puedes ayudarnos de otra forma!</h2>
    //   <CardBoton/>
    //   <h2>Deja tu huella..</h2>
    //   <Carrousel/>
    //   <Animal/>
    //   <Conocenos />
    //   <Empresas />
    //   <Formulario />
    //   <Footer /> 
    //   <CookiesWeb />
   
    // </div>
  );
}

export default App;
