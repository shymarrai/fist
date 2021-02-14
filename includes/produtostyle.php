<style class="cp-pen-styles">@import 'https://fonts.googleapis.com/css?family=Playfair+Display:400,700';

@media only screen and (max-width: 768) {
#inside {
  width: 100%;
  height: 1300px;
  background-color: #121212;
  z-index: -1;
}
.footer-section{
  margin-top: -40%;
  width: 100%;
}
#zoom{
	width: 200px;
}
.feature-image {
  position: bottom;
  width: 100%;
  margin-top:80%;
  height: 377px;
  background-size: cover;
  transform: rotate(180deg);
}
  }
#img-left{
	width: 80%;
  margin-left: 10%;
}
#img-right{
	width: 80%;
  margin-left: 10%;
}
  
#l-titulodesc {
  color: #fff;
  display: flex;
  margin-top: 5%;
  margin-left: 55%;
  position: absolute;
}  
#r-titulodesc {
  color: #fff;
  display: flex;
  margin-top: 5%;
  margin-left: 15%;
  position: absolute;
}
  
#imgdesc{
  align-items: center;
}
#zoom{
	width: 350px;
}

h1,
h2,
h3 {
  font-family: 'Playfair Display', serif;
  font-weight: 700;
  color: #000;
  margin: 0;
  padding: 0;
}

h1 {
  font-size: 3em;
}

h2 {
  font-family: 'Lato';
  font-size: 1.7em;
  font-weight: 300;
}

h3 {
  font-size: 1.6em;
}

p,
span,
ul,
li {
  color: #999;
  font-weight: 100;
  line-height: 1.8;
}

body {
	
background-color: #e6e6e6;
	
}
.page-container {
  width: 100%;
  height: auto;
  position: relative;
  display: block;
  
}

.noscroll {
  transition: all 0.40s ease-in-out 0s;
  overflow-y: hidden;
}

.overlay {
  position: absolute;
  left: 0px;
  top: 0px;
  bottom: 0;
  width: 100%;
  height: 100%;
  z-index: 2;
  opacity: 0;
  visibility: hidden;
  background: black;
  transition: all 350ms ease-in 0.2s;
}

.overlay-show {
  opacity: 0.5;
  visibility: visible;
  transition: opacity 260ms ease-in 0.3s;
  overflow: hidden;
}

.column {
  padding: 0 3em;
}

svg#Icons {
  width: 32px;
  height: 42px;
  height: auto;
}

svg#Icons path {
  fill: #111;
}

.icon-menu-open,
icon-menu-close {
  margin: 10px 0;
  display: inline-block;
  cursor: pointer;
}

.icon-menu-open .bar1,
.icon-menu-close .bar1,
.icon-menu-open .bar2,
.icon-menu-close .bar2,
.icon-menu-open .bar3,
.icon-menu-close .bar3 {
  height: 2px;
  background-color: #444;
  margin: 4px 0;
  transition: 0.4s;
}

.icon-menu-open .bar1 {
  width: 20px;
}

.icon-menu-open .bar2 {
  width: 30px;
}

.icon-menu-open .bar3 {
  width: 20px;
}

.icon-menu-close .bar1,
.icon-menu-close .bar2,
.icon-menu-close .bar3 {
  width: 22px;
}

.icon-menu-open .bar3 {
  margin: 0
}

.icon-menu-close {
  margin: 22px 15px;
}

.icon-menu-close .bar1 {
  -webkit-transform: rotate(-45deg) translate(-4px, 4px);
  transform: rotate(-45deg) translate(-3px, 4px);
}

.icon-menu-close .bar2 {
  opacity: 0;
}

.icon-menu-close .bar3 {
  -webkit-transform: rotate(45deg) translate(-7px, -7px);
  transform: rotate(45deg) translate(-4px, -6px);
}

.hero-image {
  position: center;
  background-size: cover;
  width: 100%;
  height: 377px;
  z-index: 0;
}

.content {
	margin-left:10%;
}
	
.breadcrumb {
  margin: 2em 0;
  list-style: none;
  overflow: hidden;
}

.breadcrumb li:before {
  font-family: FontAwesome;
  content: "\f105";
  font-size: 10px;
  line-height: 4;
  padding: 0 0.8em;
  color: #ccc;
}

.breadcrumb li {
  float: left;
}

.breadcrumb li a {
  font-size: 0.86em;
  font-weight: 100;
  color: #bbb;
  text-decoration: none;
  padding: 10px 0 10px 6px;
  position: relative;
  display: block;
  float: left;
}

.wrapper {
  display: table;
  max-width: 1200px;
  margin: 0 auto;
  padding-top: 10em;
}

.inner {
  display: table-cell;
  padding: 0 4em;
  max-width: 400px;
  float: left;
  text-align: center;
}

.inner span {
  font-size: .9em;
  color: #aaa;
}

.imageView {
  border-style: solid;
  border-color: #eee;
  border-width: thin;
  width: 400px;
  height: 510px;
  z-index: 0;
  left: 100px;
  top: 100px;
  overflow: hidden;
  text-align: center;
}

.description {
  max-width: 600px;
  float: left;
}

.product-name {
  font-size: 1.4em;
  font-weight: 700;
  color: #cb8f0f;
}

.price h2 {
  color: #cb8f0f;
  letter-spacing: 1px;
}

.basket-btn {
  display: table;
  width: 200px;
  height: 60px;
  background-color: #222;
  color: #fff;
  margin: 3em 0;
  border: 1px solid #222;
  cursor: pointer;
  box-shadow: inset 0 0 0 0 #fff;
  -webkit-transition: all ease-out 0.2s;
  -moz-transition: all ease-out 0.2s;
  transition: all ease-out 0.2s;
}

.basket-btn:after {}

.basket-btn:hover {
  box-shadow: inset 0 100px 0 0 #fff;
}

.basket-btn span:hover {
  color: #111;
}

.basket-btn span {
  display: table-cell;
  text-align: center;
  vertical-align: middle;
}

.imgzoom {
  background-size: cover;
  width: 100%;
  height: 100%;
  z-index: 2;
  left: 0px;
  top: 20px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  -webkit-transition: transform 0.35s cubic-bezier(.35, .06, .52, .91);
  -moz-transition: transform 0.35s cubic-bezier(.35, .06, .52, .91);
  -o-transition: transform 0.35s cubic-bezier(.35, .06, .52, .91);
  -ms-transition: transform 0.35s cubic-bezier(.35, .06, .52, .91);
  transition: transform 0.35s cubic-bezier(.35, .06, .52, .91);
}

.imageView:hover {
  cursor: zoom-in;
}

.strip {
  position: relative;
  margin-top: 0%;
  width: 100%;
  height: 500px;
  background-color: #121212;
  z-index: -1;
}
.strip p {
font-size:13px;
}
#l-descricao{
  background-color: #121212;
}
#r-descricao{
  background-color: #121212;
}
  
#titulodesc {
  text-align: center;
}
  
.feature-image {
  width: 100%;
  height: 377px;
  transform: rotate(180deg);
}

span.signature {
  font-size: 0.8em;
  color: #ccc;
  display: block;
  clear: both;
  text-align: center;
  padding-top: 5em;
}</style>