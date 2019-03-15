 function Naira(){
  var unit= document.getElementById('unit').value;


  document.getElementById('ans').innerHTML= 1 * unit;
  return true;
}
function add(){
        var units=document.getElementById("unit").value;
        var news = document.getElementById('total');
        news.value=units*1*100;
        console.log(new.value);
}	