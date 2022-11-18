import React from 'react'
import '../estilos/footer.css';
import facebook from '../media/FacebookLogo.png';
import insta from '../media/InstagramLogo.png';
import twitter from '../media/TwitterLogo.png';
import youtube from '../media/YoutubeLogo.png';
import logo from  '../media/logo_footer.png';

export const Footer = () => {
  return (

    <footer class="footer"  >
      <ul class="item">
        <li class="navitem"><a href="#">< img src= {facebook}/></a></li>
        <li class="navitem"><a href="#">< img src= {youtube}/></a></li>
        <li class="navitem_logo"><a href="#">< img src= {logo}/></a></li>
        <li class="navitem"><a href="#">< img src= {insta}/></a></li>
        <li class="navitem"><a href="#">< img src= {twitter}/></a></li>
      </ul>
      <p class="text-center text-muted">&copy; 2022 Company, Inc</p>
    </footer>
  
  )
}

