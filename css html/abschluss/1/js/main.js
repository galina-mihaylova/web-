/*
Beispiel für localStorage modifiziert nach: Brian P. Hogan und Stefan Fröhlich: 
HTML5 & CSS3: Webentwicklung mit den Standards von morgen. Verlag: O'Reilly) 
*/

$(function(){
        
        
        Einstellungen_laden();
        
        $('form#einstellungen').submit(function(event){
          event.preventDefault();
          Einstellungen_speichern ();
        });
      });
      
      function Einstellungen_speichern (){
        localStorage.setItem("hintergrund_farbe", $("#hintergrund_farbe").val());
        localStorage.setItem("text_farbe", $("#text_farbe").val());
        localStorage.setItem("schrift_groesse", $("#schrift_groesse").val());
        Einstellungen_anwenden ();
      }
      
      function Einstellungen_anwenden (){
        $("body").css("backgroundColor", $("#hintergrund_farbe").val());
        $("body").css("color", $("#text_farbe").val());
        $("body").css("fontSize", $("#schrift_groesse").val() + "px");
      }
      
      function Einstellungen_laden (){
        var bgcolor = localStorage.getItem("hintergrund_farbe");
        var text_color = localStorage.getItem("text_farbe");
        var text_size = localStorage.getItem("schrift_groesse");
        
        $("#hintergrund_farbe").val(bgcolor);
        $("#text_farbe").val(text_color);
        $("#schrift_groesse").val(text_size);
        
        Einstellungen_anwenden ();
      }
	  
/*
Beispiel für Geolocation modifiziert nach: Brian P. Hogan und Stefan Fröhlich: 
HTML5 & CSS3: Webentwicklung mit den Standards von morgen. Verlag: O'Reilly) 
*/  
        function finde_mich (){		 
        navigator.geolocation.getCurrentPosition(function(position) { 
      	  zeigePosition (position.coords.latitude, position.coords.longitude);
        }); 
     
        var zeigePosition = function(breite, laenge){
        var markierung = "&markers=color:red|label:Y|" + breite + "," + laenge;
        var bild = $("#karte");      
        var quelle = bild.attr("src") + markierung;
        quelle = quelle.replace("sensor=false", "sensor=true");
        bild.attr("src", quelle);
        };    
		};