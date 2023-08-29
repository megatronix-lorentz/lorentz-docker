<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <base target="_blank" />
  <link rel="apple-touch-icon" type="image/png" href="./wyntech-icon-32x32.png" />
  <meta name="apple-mobile-web-app-title" content="Wyntech" />
  <link rel="shortcut icon" type="image/x-icon" href="./wyntech-icon-32x32.png" />
  <link rel="mask-icon" type="image/x-icon" href="./wyntech-icon-32x32.png" color="#111" />
  <title>Wyntech - Gerenciamento de Servidor Asterisk</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  <!-- 
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/turretcss/dist/turretcss.min.css" crossorigin="anonymous">
    https://www.colorhexa.com/767676 
    https://fontawesome.com/v5/search?o=r&m=free&c=communication 
  -->
  <style>
    html,
    body {
      font-family: Segoe UI;
      color: #2f3e6c;
      background: #f5f5f5;
    }

    h2 {
      color: #2f3e6c;
      font-family: Segoe UI Light;
      letter-spacing: 1px;
      font-size: 30px;
      font-weight: bold;
      margin-bottom: 20px;
      text-shadow: 2px 2px 3px rgba(118, 118, 118, 0.3);
    }

    .container {
      margin: 20px auto;
    }

    .containerm, .col-sm-6, .col-md-4 {
      margin: 20px auto;
    }

    #item {
      -webkit-transition: all 0.2s ease-in;
      -moz-transition: all 0.2s ease-in;
      -ms-transition: all 0.2s ease-in;
      -o-transition: all 0.2s ease-in;
      transition: all 0.2s ease-in;
      margin: 0px 0px;
      padding: 15px 10px;
      outline: none;
      text-align: left;
    }

    .container-block {
      border: 1px solid #d8d8d8;
      border-radius: 5px;
      box-shadow: -1px -1px 2px 0px #FFFFFF, 2px 2px 2px 0px #e2e2e2;
    }


    #item:focus,
    #item:active,
    #item:hover {
      text-decoration: none;
      outline: none;
    }

    #item:focus .container-block,
    #item:active .container-block,
    #item:hover .container-block {
      background-color: rgb(21, 148, 208, 0.1);
      -webkit-transition: all 0.4s ease-in;
      -moz-transition: all 0.4s ease-in;
      -ms-transition: all 0.4s ease-in;
      -o-transition: all 0.4s ease-in;
      transition: all 0.4s ease-in;
      border-radius: 5px;
      box-shadow: -7px -7px 14px 0px #FFFFFF, 5px 5px 13px 0px #C8C8C8;
    }

    .container-block {
      -webkit-transition: all 0.4s ease-in;
      -moz-transition: all 0.4s ease-in;
      -ms-transition: all 0.4s ease-in;
      -o-transition: all 0.4s ease-in;
      transition: all 0.4s ease-in;
      border-radius: 5px;
      padding: 12px 8px;
      text-align: left;
      cursor: pointer;
    }

    .block1 {
      display: inline-block;
      width: 47px;
      text-align: center;
    }

    .block1 i {
      -webkit-transition: all 0.4s ease-in;
      -moz-transition: all 0.4s ease-in;
      -ms-transition: all 0.4s ease-in;
      -o-transition: all 0.4s ease-in;
      transition: all 0.4s ease-in;
      font-size: 31px;
      color: #616161;
    }

    #item:focus .block1 i,
    #item:active .block1 i,
    #item:hover .block1 i,
    #item:hover .block2 p,
    #item:hover .block2 span {
      -webkit-transition: all 0.4s ease-in;
      -moz-transition: all 0.4s ease-in;
      -ms-transition: all 0.4s ease-in;
      -o-transition: all 0.4s ease-in;
      transition: all 0.4s ease-in;
      color: #0679d8;
    }

    .block2 {
      display: inline-block;
      text-align: left;
    }

    .block2 span {
      font-size: 16px;
      color: #000000;
      font-weight: bold;
    }

    .block2 p {
      font-size: 14px;
      color: #757575;
    }

    img {
      vertical-align: text-bottom;
    }

    a {
      text-decoration: none;
    }
  </style>

  <script>
    window.console = window.console || function(t) {};
  </script>



</head>

<body translate="no">
  <div class="container">
    <div class="row text-center">
      <h2>Gerenciamento Asterisk Wyntech</h2>
      <div id="menu-box">

        <div id="item" class="col col-sm-6 col-md-4 col-lg-3">
          <div class="container-block">
            <div class="block1">
              <img src="./img/orbital48.png" width="37">
            </div>
            <div class="block2">
              <span>Lorentz</span>
              <p>Lorentz Monitor Asterisk</p>
            </div>
          </div>
        </div>

        <div id="item" class="col col-sm-6 col-md-4 col-lg-3">
          <a href="http://<?php echo $_ENV['IP_HOST'];?>/astlinux/admin/status.php">
            <div class="container-block">
              <div class="block1">
                <i class="fa fa-exclamation-circle"></i>
              </div>
              <div class="block2">
                <span>Status Asterisk</span>
                <p>Uso de disco, canais...</p>
              </div>
            </div>
          </a>
        </div>

        <div id="item" class="col col-sm-6 col-md-4 col-lg-3">
          <a href="http://<?php echo $_ENV['IP_HOST'];?>/astlinux/admin/edit.php?file=/etc/asterisk/sip.conf">
            <div class="container-block">
              <div class="block1">
                <i class="fa fa-headphones"></i>
              </div>
              <div class="block2">
                <span>Configurar Ramal SIP</span>
                <p>Editar  <b>sip.conf</b></p>
              </div>
            </div>
          </a>
        </div>

        <div id="item" class="col col-sm-6 col-md-4 col-lg-3">
          <a href="http://<?php echo $_ENV['IP_HOST'];?>/astlinux/admin/edit.php?file=/etc/asterisk/manager.conf">
            <div class="container-block">
              <div class="block1">
                <i class="fa fa-cogs"></i>
              </div>
              <div class="block2">
                <span>AMI Manager</span>
                <p>Editar  <b>manager.conf</b></p>
              </div>
            </div>
          </a>
        </div>

        <div id="item" class="col col-sm-6 col-md-4 col-lg-3">
          <a href="http://<?php echo $_ENV['IP_HOST'];?>/astlinux/admin/edit.php?file=/etc/asterisk/queues.conf">
            <div class="container-block">
              <div class="block1">
                <i class="fa fa-random"></i>
              </div>
              <div class="block2">
                <span>Filas</span>
                <p>Editar  <b>queues.conf</b></p>
              </div>
            </div>
          </a>
        </div>

        <div id="item" class="col col-sm-6 col-md-4 col-lg-3">
          <a href="http://<?php echo $_ENV['IP_HOST'];?>/astlinux/admin/edit.php?file=/etc/asterisk/agents.conf">
            <div class="container-block">
              <div class="block1">
                <i class="fa fa-users"></i>
              </div>
              <div class="block2">
                <span>Agentes</span>
                <p>Editar  <b>agents.conf</b></p>
              </div>
            </div>
          </a>
        </div>

        <div id="item" class="col col-sm-6 col-md-4 col-lg-3">
          <a href="http://<?php echo $_ENV['IP_HOST'];?>/astlinux/admin/edit.php?file=/etc/asterisk/extensions.conf">
            <div class="container-block">
              <div class="block1">
                <i class="fa fa-sign-out"></i>
              </div>
              <div class="block2">
                <span>Master Dial Plan</span>
                <p>Editar  <b>extensions.conf</b></p>
              </div>
            </div>
          </a>
        </div>

        <div id="item" class="col col-sm-6 col-md-4 col-lg-3">
          <a href="http://<?php echo $_ENV['IP_HOST'];?>/astlinux/admin/edit.php?file=/etc/asterisk/ura.conf">
            <div class="container-block">
              <div class="block1">
                <i class="fa fa-tty"></i>
              </div>
              <div class="block2">
                <span>URA</span>
                <p>Editar  <b>ura.conf</b></p>
              </div>
            </div>
          </a>
        </div>

        <div id="item" class="col col-sm-6 col-md-4 col-lg-3">
          <a href="http://<?php echo $_ENV['IP_HOST'];?>/astlinux/admin/edit.php?file=/etc/asterisk/iax.conf">
            <div class="container-block">
              <div class="block1">
                <i class="fa fa-fax"></i>
              </div>
              <div class="block2">
                <span>Inter-Asterisk eXchange</span>
                <p>IAX Editar  <b>iax.conf</b></p>
              </div>
            </div>
          </a>
        </div>

        <div id="item" class="col col-sm-6 col-md-4 col-lg-3">
          <a href="http://<?php echo $_ENV['IP_HOST'];?>/astlinux/admin/edit.php">
            <div class="container-block">
              <div class="block1">
                <i class="fa fa-cog"></i>
              </div>
              <div class="block2">
                <span>Configurações Asterisk</span>
                <p>Editar s .conf</p>
              </div>
            </div>
          </a>
        </div>

        <div id="item" class="col col-sm-6 col-md-4 col-lg-3">
          <a href="http://<?php echo $_ENV['IP_HOST'];?>/astlinux/admin/network.php">
            <div class="container-block">
              <div class="block1">
                <i class="fa fa-globe"></i>
              </div>
              <div class="block2">
                <span>Configurações de Rede</span>
                <p>Interfaces, Firewall, Seviços</p>
              </div>
            </div>
          </a>
        </div>

        <div id="item" class="col col-sm-6 col-md-4 col-lg-3">
          <a href="http://<?php echo $_ENV['IP_HOST'];?>/astlinux/admin/system.php">
            <div class="container-block">
              <div class="block1">
                <i class="fa fa-laptop"></i>
              </div>
              <div class="block2">
                <span>Configurações de Sistema</span>
                <p>Senha, Logs, Recarga Asterisk</p>
              </div>
            </div>
          </a>
        </div>

        <div id="item" class="col col-sm-6 col-md-4 col-lg-3">
          <a href="http://<?php echo $_ENV['IP_HOST'];?>/astlinux/admin/view.php?file=/var/log/asterisk/messages">
            <div class="container-block">
              <div class="block1">
                <i class="fa fa-file-text-o"></i>
              </div>
              <div class="block2">
                <span>Ver Log Asterisk</span>
                <p>Abrir arquivo de LOG</p>
              </div>
            </div>
          </a>
        </div>

        <div id="item" class="col col-sm-6 col-md-4 col-lg-3">
          <div class="container-block">
            <div class="block1">
              <i class="fa fa-pencil-square-o"></i>
            </div>
            <div class="block2">
              <span>Personalization</span>
              <p>Background, lock screen</p>
            </div>
          </div>
        </div>

        <div id="item" class="col col-sm-6 col-md-4 col-lg-3">
          <a href="http://<?php echo $_ENV['IP_HOST'];?>/sysinfo/">
            <div class="container-block">
              <div class="block1">
                <!--<img src="http://<?php echo $_ENV['IP_HOST'];?>/sysinfo/gfx/images/Linux.png"-->
                <i class="fa fa-info-circle"></i>
              </div>
              <div class="block2">
                <span>Informações de Sistema</span>
                <p>Hardware, Memória, Arquivos</p>
              </div>
            </div>
          </a>
        </div>

        <div id="item" class="col col-sm-6 col-md-4 col-lg-3">
          <a href="http://www.asteriskdocs.org/en/3rd_Edition/asterisk-book-html/asterisk-book.html">
            <div class="container-block">
              <div class="block1">
                <img src="./img/asterisk-logo.png" width="37">
              </div>
              <div class="block2">
                <span>Asterisk™</span>
                <p>O Guia Definitivo</p>
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>
  </div>
</body>

</html>