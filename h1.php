<!Doctype html>
<head>
    <style>
.toggle-menu{
   position:relative;
  /*  display:inline-block;*/
    display:inline-block;
    font-family:Arial,sans-serif;
}


.toggle-menu input[type="checkbox"]{
  display:none;
}
/*.toggle-menu label{

    display:block;
    width:30px;
    height:30px;
    //background-color:#ccc;
    cursor:pointer;
    position:absolute;
    top:10px;
    left:0;
    z-index:1;
    
}*/
.sidebaricon{
    display:block;
    width:22px;
    height:22px;
    position:absolute;
    z-index:20;
    top:22px;
    left:1200px;
    cursor:pointer;
   // background-color:#ccc;
}
.spinner{
    height:3px;
    background-color:#ccc;
    transition:all 0.3s;
}
.spinner.middle,
.spinner.bottom{
    margin-top:3px;
}
.toggle-menu ul.menu{
    list-style-type:none;
    margin:10px;
    padding:10px;
    position:absolute;
    top:0;
    left:0;
    width:200px;
   // background-color:#fff;
    //border:1px solid red;
    display:none;
    background-color:#2e86de;
}
.toggle-menu input[type="checkbox"]:checked ~ ul.menu{
    display:block;
    top:22px;
    left:1200px;
}
.toggle-menu ul.menu li{
    padding:10px;
}
.toggle-menu ul.menu li a{
    text-decoration:none;
    color:#333;
}
.toggle-menu .spinner{
    height:5px;
    background:black;
    //transition: all 0.3s;
}
.toggle-menu input[type="checkbox"]:checked ~ .sidebaricon> .spinner.middle{
    opacity:0;
}

.toggle-menu input[type="checkbox"]:checked ~ .sidebaricon> .spinner.top{
    transform:rotate(135deg);
    margin-top:8px;
}

.toggle-menu input[type="checkbox"]:checked ~ .sidebaricon> .spinner.bottom{
    transform:rotate(-135deg);
    margin-top:-14px;
}
/*.menu.li a{
    color:#fff;
    display:block;
    text-decoration:none;
    text-transform:uppercase;
    padding:20px;
}*/
</style>
</head>
<body>
<div class="toggle-menu">
    <input type="checkbox" id="toggle"/>
   <label for="toggle" class="sidebaricon">
    <div class="spinner top"></div>
    <div class="spinner middle"></div>
    <div class="spinner bottom"></div>
    </label>
<ul class="menu">
    <li><a href="#">Home</a></li>
    <li><a href="#">Menu Item 2</a></li>
    <li><a href="#">Menu Item 3</a></li>
</ul>
</div>
</body>
</html>