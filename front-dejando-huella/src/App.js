
import './App.css';
import Navbar from './componentes/Navbar.jsx';
import Video from './componentes/Video.jsx';
import Carrousel from './componentes/Carrousel.jsx';
import Animal from './componentes/Animal.jsx';
import { Footer } from './componentes/Footer';

function App() {
  return (
    <div className="App">
     <Navbar />
     <Video />
     <Carrousel/>
     <Animal/>
    
    < Footer/>
     

    </div>
  );
}

export default App;
