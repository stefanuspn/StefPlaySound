/**
 * StefPlaySound.js
 * v 1.0
 *
 * @author Stefanus Prasetyo Nugroho 
 * stefanusnugroho585@gmail.com
 */
function StefPlaySound(file){
    // Properti-properti
    this.file = file;
    this.show = show; // Mendefinisikan sebuah metode
    }
    function show(){
      with(this){ // Katakunci with dengan this
      return $('<audio class="sound-player" autoplay="autoplay" style="display:none;">'
       +'<source src="' + file + '" />'
       +'<embed src="' + file + '" hidden="true"  loop="false"/>'
      +"</audio> "
       ).appendTo('body');
      
    }
    }

    function stopSound(){
      with(this){
      return $('.sound-player').remove();
    }
  }
