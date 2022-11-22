
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
import Conocenos from "./routes/Conocenos"
import {Route,Routes} from 'react-router-dom';
function App() {
  return (

    <>
    <Routes>
      <Route path="/" element={<Inicio/>}/>
      <Route path="/contacto" element={<Contacto/>}/>
      <Route path="/conocenos" element={<Conocenos/>}/>
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
