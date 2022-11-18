import React from 'react'
import '../estilos/footer.css';
import facebook from '../media/FacebookLogo.png';
import insta from '../media/InstagramLogo.png';
import twitter from '../media/TwitterLogo.png';
import youtube from '../media/YoutubeLogo.png';
import logo from  '../media/logo_footer.png';

export const Footer = () => {
  return (

    <footer>
      <ul class="footer-menu-container">
        <li class="social-icon"><a href="#">< img src= {facebook}/></a></li>
        <li class="social-icon"><a href="#">< img src= {youtube}/></a></li>
        <li class="social-icon"><a href="#">< img class="logo" src= {logo}/></a></li>
        <li class="social-icon"><a href="#">< img src= {insta}/></a></li>
        <li class="social-icon"><a href="#">< img src= {twitter}/></a></li>
      </ul>
      <p class="copyright">&copy; ASOCIACIÓN EN DEFESENSA DE LOS ANIMALES - DEJANDO HUELLA ALBACETE - G55585457</p>
    </footer>
  
  )
}

