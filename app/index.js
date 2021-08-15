import './style.scss';
import animacoes from './js/animacoes';
import menu from './js/menu';
import parallax from './js/parallax';
import modal from './js/modal';
import setColors from './js/setColors';
import './js/modernizr';

menu();
animacoes();
parallax('.home-parallax img');
setColors('.services-item', ['yellow', 'green', 'blue', 'red']);
