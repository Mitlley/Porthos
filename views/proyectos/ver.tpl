<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" 
    content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
    <title><? echo ucfirst($proyecto['nombre']);?></title>
    <?php include HOME . DS . 'css' . DS . 'style.html';?>
    
    <script src="/Porthos/views/components/platform/platform.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- 2. Use an HTML Import to bring in the element. -->
    <link rel="import"
          href="/Porthos/views/components/porthos/porthos-proyecto.php">

    <link href="/Porthos/views/components/font-roboto/roboto.html" rel="import">

  <style shim-shadowdom>
  
    body {
      font-family: RobotoDraft, 'Helvetica Neue', Helvetica, Arial;
    }
    
  </style>
  </head>
  <body fullbleed unresolved  touch-action="auto"> <!-- IMPORTANTISIMO PARA QUE FUNCIONES EN IPAD-->
    <porthos-proyecto></porthos-proyecto>
  </body>
</html>