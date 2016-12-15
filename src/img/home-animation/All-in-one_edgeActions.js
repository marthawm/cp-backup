/***********************
* Azioni di composizione in Adobe Edge Animate
*
* Modifica con cautela questo file di testo, prestando attenzione a salvare 
* firme e commenti di funzione che iniziano con "Edge" per mantenere 
* possibilità di interagire con le azioni dall'interno di Adobe Edge Animate
*
***********************/
(function($, Edge, compId){
var Composition = Edge.Composition, Symbol = Edge.Symbol; // alias per le classi usate più di frequente in Edge

   //Edge symbol: 'stage'
   (function(symbolName) {
      
      
      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 16500, function(sym, e) {
         sym.play("start");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${Stage}", "click", function(sym, e) {
         // inserire qui il codice per il clic del mouse
         
      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 60500, function(sym, e) {
         // Riproduci la linea temporale in un'etichetta oppure a un'ora specifica. Ad esempio:
         // sym.play(500); o sym.play("myLabel");
         sym.play("start");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${ClickHere-world}", "click", function(sym, e) {
         // Riproduci la linea temporale in un'etichetta oppure a un'ora specifica. Ad esempio:
         // sym.play(500); o sym.play("myLabel");
         sym.play("world");
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${ClickHere-laptop}", "click", function(sym, e) {
         // Riproduci la linea temporale in un'etichetta oppure a un'ora specifica. Ad esempio:
         // sym.play(500); o sym.play("myLabel");
         sym.play("laptop");
         

      });
      //Edge binding end

      Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 4000, function(sym, e) {
         // Riproduci la linea temporale in un'etichetta oppure a un'ora specifica. Ad esempio:
         // sym.play(500); o sym.play("myLabel");
         sym.play("start");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${orange-playCopy}", "click", function(sym, e) {
         // inserire qui il codice per il clic del mouse
         sym.play("world");

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${orange-playCopy3}", "click", function(sym, e) {
         // inserire qui il codice per il clic del mouse
         sym.play("laptop");

      });
      //Edge binding end

   })("stage");
   //Edge symbol end:'stage'

})(window.jQuery || AdobeEdge.$, AdobeEdge, "EDGE-406740697");