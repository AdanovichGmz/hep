<style type="text/css">

#container {
	margin: 0 auto;
	max-width: 890px;
}
.toggle,
[id^=drop] {
	display: none;
}

#navbar { 
	z-index: 999;
	margin:0;
	padding: 0;
	background-color: #272B34;
	line-height: 32px;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}

#logo {width: 110px;
	display: block;
	padding: 0 30px;
	float: left;
	font-size:20px;
	height: 60px;
	line-height: 60px;
}
#logo img{
	position: absolute;
	width: 110px;
	left: 10px;
	top:2px;
}
.exitpc{
	width: 70px;
	display: block;
	border-left: 1px solid #1F242A;
	float: right;
	text-align: center;
	cursor: pointer;
		padding:14px 20px;	
		color:#D5CDBA;
		font-size:14px;
		text-decoration:none;
}

#navbar:after {
	content:"";
	display:table;
	clear:both;
}


#first-ul {
	float: left;
	padding:0;
	margin:0;
	list-style: none!important;
	position: relative;
	}
	#sec-ul{
		list-style: none!important;
		margin: 0;
		padding: 0;
		z-index: 9999;
	}
.first-level {
	margin: 0px;
	display:inline-block;
	float: left;
	background-color: #272B34;
	border-right: 1px solid #1F242A;
	}
	.sec-level{
		line-height: 20px;
		background-color: #05BDE3;
		border-right: none;
		border-bottom: 1px solid rgba(255,255,255,.5);
	}
.sec-level a{
	color: #fff;
}
nav a {
	display:block;
	padding:14px 20px;	
	color:#D5CDBA;
	font-size:14px;
	text-decoration:none;
}
nav ul li ul li:hover { background: #1F242A; }
nav a:hover { 
	background-color:#1F242A;; 
}
nav ul ul {
	display: none;
	position: absolute; 
	top: 60px; 
}
nav ul li:hover > ul {
	display:inherit;
}
nav ul ul li {
	width:170px;
	float:none;
	display:list-item;
	position: relative;
}
nav ul ul ul li {
	position: relative;
	top:-60px;
	left:170px; 
}
.exit{
		display: none;
	}
li > a:after { content:  '   ▾'; }
li > a:only-child:after { content: ''; }
@media all and (max-width : 768px) {
	.exitpc{
		display: none;
	}
	.exit{
		display: block;
	}
nav ul li ul li{
		background-color: #05BDE3;
		border-right: none;
		border-bottom: 1px solid rgba(255,255,255,.5);
	}
nav ul li ul li a{
	color: #fff;
}
	#logo {
		display: block;
		padding: 0;
		width: 100%;
		text-align: center;
		float: none;
		position: relative;
		border-bottom: 1px solid #1F242A!important;
	}

	nav {
		margin: 0;

	}
ul{
	width: 100%;

}
	.toggle + a,
	.menu {
		display: none;
	}
	.toggle {
		display: block;
		cursor: pointer;
		padding:14px 20px;	
		color:#D5CDBA;
		font-size:14px;
		text-decoration:none;
		border:none;
	}
	.burger {
		
		padding:0 20px!important;	
		background-color: #1F242A;
		position: absolute;
		right: 0;
		top: 0;

	}

	.toggle:hover {
		background-color: #1F242A;
	}
	[id^=drop]:checked + ul {
		display: block;
	}
	nav ul li {
		display: block;
		width: 100%;
		border-right: none !important;
		border-bottom: 1px solid #1F242A;
		}

	nav ul ul .toggle,
	nav ul ul a {
		padding: 0 40px;
	}

	nav ul ul ul a {
		padding: 0 80px;
	}

	
  
	nav ul li ul li .toggle,
	nav ul ul a,
  nav ul ul ul a{
		padding:14px 20px;	
		color:#FFF;
		font-size:17px; 
	}
  
  
	nav ul li ul li .toggle{
		background-color: #212121; 
	}
	nav ul ul {
		float: none;
		position:static;
		color: #ffffff;
	}
	nav ul ul li:hover > ul,
	nav ul li:hover > ul {
		display: none;
	}
	nav ul ul li {
		display: block;
		width: 100%;
	}

	nav ul ul ul li {
		position: static;
	}

}

@media all and (max-width : 330px) {

	nav ul li {
		display:block;
		width: 94%;
	}

}
</style>

        <nav id="navbar">
        <div id="logo"><img src="images/white-logo.png">  <label for="drop" class="toggle burger">☰</label></div>

       
        <input type="checkbox" id="drop" />
            <ul id="first-ul" class="menu">
                <li class="first-level"><a href="#">Inicio</a></li>
                <li class="first-level">
                   
                    <label for="drop-1" class="toggle">Mostrador +</label>
                    <a href="#">Mostrador</a>
                    <input type="checkbox" id="drop-1"/>
                    <ul id="sec-ul">
                        <li class="sec-level"><a href="ventas/">Punto de Venta</a></li>
                        <li class="sec-level"><a href="ventas/movimientos.php">Movimientos</a></li>
                        
                    </ul> 

                </li>
                <li class="first-level">

               
                <label for="drop-2" class="toggle">Listas +</label>
                <a href="#">Listas</a>
                <input type="checkbox" id="drop-2"/>
                <ul id="sec-ul">
                    <li class="sec-level"><a href="ventas/info.php">Info</a></li>
                    <li class="sec-level"><a href="ventas/productos.php">Productos</a></li>
                    <li class="sec-level"><a href="ventas/invitaciones.php">Invitaciones</a></li>
                    <li class="sec-level"><a href="ventas/files.php">Archivos</a></li>
                  <!--   <li>

                    Second Tier Drop Down        
                    <label for="drop-3" class="toggle">Tutorials +</label>
                    <a href="#">Tutorials</a>         
                    <input type="checkbox" id="drop-3"/>

                    <ul>
                        <li><a href="#">HTML/CSS</a></li>
                        <li><a href="#">jQuery</a></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                    </li>  --> 
                </ul>
                </li>
                <li class="first-level">

                <!-- First Tier Drop Down -->
                <label for="drop-3" class="toggle">Facturas +</label>
                <a href="#">Facturas</a>
                <input type="checkbox" id="drop-3"/>
                <ul id="sec-ul">
                    <li class="sec-level"><a href="ventas/facturas.php">Realizadas</a></li>
                    <li class="sec-level"><a href="#">Pendientes</a></li>
                    <li class="sec-level"><a href="facturacion/">De cliente</a></li>
                    <li class="sec-level"><a href="#">Empresariales</a></li>
                  <!--   <li>
                   
                    Second Tier Drop Down        
                    <label for="drop-3" class="toggle">Tutorials +</label>
                    <a href="#">Tutorials</a>         
                    <input type="checkbox" id="drop-3"/>

                    <ul>
                        <li><a href="#">HTML/CSS</a></li>
                        <li><a href="#">jQuery</a></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                    </li>  --> 
                </ul>
                </li>
                <li class="exit" class="first-level"><a href="logout.php">Salir</a></li>
                
            </ul>
            <a href="logout.php" class="exitpc">Salir</a>
        </nav>


