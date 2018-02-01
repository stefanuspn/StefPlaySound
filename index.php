<!DOCTYPE html>
<html>
<head>
  <title>StefPlaySound</title>
</head>
<body>

 
<script type="text/javascript" src="asset/js/jquery-3.2.1.min.js?v=<?php echo filemtime('./asset/js/jquery-3.2.1.min.js');?>"></script>
  <script type="text/javascript" src="asset/js/jQueryStefPlaySound.js?v=<?php echo filemtime('./asset/js/jQueryStefPlaySound.js');?>"></script>
  <script type="text/javascript">
   var sounds = new  StefPlaySound("audio/alone.mp3");
  // Memanggil metode untuk sounds
    sounds.show();
    //sounds.stopSound(); // Memanggil metode untuk mematikan audio
  </script>
 
</body>
</html>
