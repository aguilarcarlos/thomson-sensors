<!doctype html>
<head>
  <title>Login</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<style type="text/css">
body
  {
    background-color: #0093D9;
  } 
  
  #contenedor
  {  
    width: 100%;
    height: 100%;
  }
  .well
  {     
      background-color: #fff;
      position: absolute;
      width: 320px;
      height: 250px;      
      left: 50%; 
      top: 50%;
      margin-left: -160px;
      margin-top: -125px;
  } 

  #cab
  {  
      width: 320px;
      height: 40px;  
      text-align: center;
      color: #0093D9;

  }
  #centrar
  {  
    width: 220px;
    height: 200px;  
    margin-top: 20px;
    margin-left: 60px;
  }
   </style>

</head>
<body>
  <div id = "contenedor">
    <div class="well" >
       <div id="cab"><h3> LOGIN </h3></div>
      <div id="centrar">
        <form action="includes/valida.php" method="post">  
           <b>Nombre</b>:      
           <input name = "Nombre" type="text" class="span3" id="inputUsuario" placeholder="User"><br />
           <b>Contraseña</b>:
           <input name="Pass" type="password" class="span3" id="inputPassword" placeholder= "Password">
           <button type="submit" class="btn btn-info">Login</button><font size="1" color="blue"> <a href="#" <u>Olvidaste tu contraseña?</u></a></font>    
        </form>
      </div>
    </div>
  </div>
</body>
</html>
