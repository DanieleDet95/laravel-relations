require('./bootstrap');

var $ = require('jquery');
$(document).ready(
  function(){

    $(".artist-block").click(function(){
      console.log(this);
  });

});
