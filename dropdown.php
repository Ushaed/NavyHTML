<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>
<style>
ul {
	margin:0;
	padding:0;
	list-style:none;
}
.menu a {
	display: inline-block;
	color: blue;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
}
li.dropdown {
	display: inline-block;
	position:relative;
}
.dropdown:hover > a {
	background:#f1f1f1;
}
.dropdown-content {
	position: absolute;
	background-color: #BDBDBD;
	min-width: 70px;
	box-shadow: 5px 5px 5px 5px;
	z-index: 1;
	top:0;
	left:-999em;
	transition:top .5s ease;
}
.dropdown-content li {
	display:block;
}
.dropdown-content a {
	color: black;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
	text-align: left;
}
.dropdown-content a:hover, .dropdown-content li:hover > a {
	background-color: #f1f1f1;
}
.dropdown:hover > .dropdown-content {
	left:0;
	top:100%;
}
.dropdown .dropdown > .dropdown-content {
	transition:transform .5s ease, opacity .3s ease;
	transform:translateX(-100%);
	opacity:0;
}
.dropdown .dropdown:hover > .dropdown-content {
	left:100%;
	transform:translateX(0);
	top:0;
	opacity:1;
}
</style>
</head>

<body>
<ul id="menu" class="menu">
  <li class="dropdown"><a href="#" class="dropbtn">Produse Informative CIMIC</a>
    <ul class="dropdown-content">
      <li><a href="../ccir.html">CCIR CIMIC</a></li>
      <li><a href="../cimicrep.html">CIMIC REP</a></li>
      <li><a href="../evaluare.html">Evaluare mediul civil</a></li>
      <li class="dropdown"><a href="../estimare.html">Estimare CIMIC</a>
        <ul class="dropdown-content">
          <li><a href="../estimare.html">Studii judete</a>
          <li><a href="../estimare.html">Studii mari.</a>
        </ul>
      </li>
      <li><a href="../studiireg.html">Studii regiune</a></li>
      <li><a href="../studii.html">Studii țară</a></li>
    </ul>
  </li>
  <li class="dropdown"><a href="#" class="dropbtn">Produse Informative CIMIC</a>
    <ul class="dropdown-content">
      <li><a href="../ccir.html">CCIR CIMIC</a></li>
      <li><a href="../cimicrep.html">CIMIC REP</a></li>
      <li><a href="../evaluare.html">Evaluare mediul civil</a></li>
      <li class="dropdown"><a href="../estimare.html">Estimare CIMIC</a>
        <ul class="dropdown-content">
          <li><a href="../estimare.html">Studii judete</a>
          <li><a href="../estimare.html">Studii mari.</a>
        </ul>
      </li>
      <li><a href="../studiireg.html">Studii regiune</a></li>
      <li><a href="../studii.html">Studii țară</a></li>
    </ul>
  </li>
</ul>
</body>
</html>