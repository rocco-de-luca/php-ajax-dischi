$(document).ready(function(){
    // refs
    var container = $('.container');
    // init handlebars template
    var source = $('#album-template').html();
    var template = Handlebars.compile(source);
    // get data from php
    $.ajax({
      url: 'http://localhost:81/php-ajax-dischi/json-script.php',
      method: 'GET',
      success: function(res){
        //console.log(res);
        for(var i = 0; i < res.length; i++){
          // popola slot handlebars
          var album = res[i];
          var context = {
            poster: album.poster,
            title: album.title,
            author: album.author,
            year: album.year
          }
          // output finale
          var output = template(context);
          container.append(output);
        }
      },
      error: function(){
        console.log('errore chiamata');
      }
    });
    
    });