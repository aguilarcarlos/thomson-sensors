<header id="header">
      <div id="contentHeader">
          <div id="logo">
            <a href="index.php"><img src="./img/Logo.png"></a>
          </div>
          <div id="detalles">
            <p>
              <strong>IP: </strong> <?php echo $_SERVER["REMOTE_ADDR"];?><br />
              <strong>Time: </strong><span id="reloj"></span><br />
              <strong>Date: </strong> <span id="fecha"></span><br />
              <span>
                Por motivos de seguridad tu IP ha sido guardada<br />
                en nuestra base de datos.
              </span>
            </p>
          </div>
      </div>
    </header>