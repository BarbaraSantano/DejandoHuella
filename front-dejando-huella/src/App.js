
import './App.css';
import Navbar from './componentes/Navbar.jsx';
import Video from './componentes/Video.jsx';
import CardBoton from './componentes/CardBoton.jsx';
import Carrousel from './componentes/Carrousel.jsx';
import Animal from './componentes/Animal.jsx';
import { Footer } from './componentes/Footer';
import Conocenos from './componentes/Conocenos.jsx';
import { Formulario } from './componentes/Formulario';

function App() {
  return (
    <div className="App">
      <Navbar />
      <Video />
      <h1>Si no puedes adoptar, puedes ayudarnos de otra forma!</h1>
      <CardBoton/>
      <h1>Deja tu huella..</h1>
      <Carrousel/>
      <Animal/>
      <Conocenos />
      <Footer /> 
      <Formulario />
    </div>
  );
}

export default App;
