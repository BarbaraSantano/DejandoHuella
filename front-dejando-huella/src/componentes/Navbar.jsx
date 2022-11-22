import React, { useState } from 'react';
import { FaBars, FaTimes } from 'react-icons/fa';
import logo from '../media/logo-horizontal.png';
import '../estilos/Navbar.css';
import Boton from './Boton';
import {Link} from 'react-router-dom'

const Navbar = () => {

    //setting mobile nav
    const [click, setClick] = useState(false)
    const handleClick = () => setClick(!click)

    //change nav color when scrolling
    const [color, setColor] = useState(false)
    const changeColor = () => {
        if (window.scrollY >= 36) {
            setColor(true)
        } else {
            setColor(false)
        }
    }

    window.addEventListener('scroll', changeColor)

    // close menu onClick
    const closeMenu = () => setClick(false)

    return (
 
        <div className={color ? 'header header-bg' : 'header'}>
            <nav className='navbar'>
                <a href='/' className='logo'>
                    <img src={logo} alt='logo' />
                </a>
                <div className='hamburger' onClick={handleClick}>
                    {click ? (<FaTimes size={30} style={{ color: '#ffffff' }} />)
                        : (<FaBars size={30} style={{ color: '#ffffff' }} />)}

                </div>
                <ul className={click ? "nav-menu active" : "nav-menu"}>
                    <li className='nav-item'>
                        <Link to="/">INICIO</Link>
                      {/* <a href='Inicio' onClick={closeMenu}>INICIO</a> */}
                    </li>
                    <li className='nav-item'>
                    <Link to="/">PERROS</Link>
                      {/* <a href='adoptaPerro' onClick={closeMenu}>PERROS</a> */}
                    </li>

                    <li className='nav-item'>
                      <a href='adoptaGatos' onClick={closeMenu}>GATOS</a>
                    </li>
                   
                    <li className='nav-item'>
                        <Link to="/conocenos">NOSOTROS</Link>
                        {/* <a href='#contactanos' onClick={closeMenu}>CONTACTO</a> */}
                    </li>
                    <li className='nav-item'>
                    <Link to="/contacto">CONTACTO</Link>
                        {/* <a href='#contactanos' onClick={closeMenu}>CONTACTO</a> */}
                    </li>
                    <li className='nav-item'>
                        <div className="contenedor-boton">
                        <Boton
                         texto='Colabora' />
                        </div>
                        
                    </li>
                </ul>
            </nav>
        </div>

    )
}

export default Navbar;