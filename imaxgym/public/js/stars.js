window.onload = function(){
 id_span.innerHTML = createStars(9) 
}

function createStars(numOfStars){
  var st = ""
  for(var i = 0; i < numOfStars; i++){
    st += "<img src='images/stars.png' >"
  }
  return st;
}