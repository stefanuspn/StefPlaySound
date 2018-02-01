# StefPlaySound.JS
Apa Itu StefPlaySound.js merupakan sebuah Plugin Jquery yang untuk mendengarkan audio secara langsung sesuai pilihan user.<br>

<br>
<br>
Plugin ini di buat oleh Stefanus Prasetyo Nugroho.

## Instalasi
Untuk bisa memakai plugin ini anda membutuhkan jquery terlebih dahulu bebas versi berapa aja, dan anda bisa menginstall jQueryStefPlaySound.js lewat NPM jika komputer anda sudah terpasang node.js dengan cara ketik di command line :<br>

```
npm install jQueryStefPlaySound.js
```

Atau anda juga bisa menggunakan seperti ini menggunakan tag script biasa, contoh:


```javascript
<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script src="asset/js/jQueryStefPlaySound.js"></script>
```

Anda Bisa mendapatkan jQueryStefPlaySound.JS berikut:<br>
<code>https://raw.githubusercontent.com/stefanuspn/StefPlaySound/master/asset/js/jQueryStefPlaySound.js</code>

### Cara Menggunakan
Siapkan terlebih dahulu file-file yang sudah disebutkan diatas yaitu jquery-3.2.1.min.js dan jQueryStefPlaySound.js :<br>

```html


<script>
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script src="asset/js/jQueryStefPlaySound.js"></script>

<script>
$(document).ready(function(){
   var sounds = new  StefPlaySound("alone.mp3");
  // Memanggil metode untuk sounds
    sounds.show();
    //sounds.stopSound(); // Memanggil metode untuk mematikan audio
});

</script>
```

