function Button1_onclick() {
function isWhiteSymbol(symb)
{
  var ret = false;
  switch(symb)
  {
    case " ":
    case "":
    case"\n":
    case "\r":
      ret = true;
    default:   
  }
 return ret;
}
var advert = {};
 advert.text = document.getElementById("ad-text").value;
 advert.words = 0;
 advert.countwords = function(){
   var wordcount = 0;
   var colnotwhite = 0;
   var wordbegin = false;
  for(var i=0;i < advert.text.length; i++)
  {
   if( !isWhiteSymbol(advert.text.charAt(i)) )
    {
    colnotwhite = colnotwhite + 1;
     if(wordbegin == false)
      {
       wordcount= wordcount+1;
       wordbegin = true;
      }    
    }
   else {   
      wordbegin = false;
   } // end if(advert.text.charAt(i) != ' ')  
} advert.words = wordcount;//end for
 }; 
 advert.category = document.getElementById("category").value;
 advert.type = document.getElementById("view").value;
 advert.name = document.getElementById("name").value;
 advert.phone = document.getElementById("phone").value;
 advert.dates = [0,1];
 
 advert.summ = 0;
 advert.getsumm = function () {
   if(advert.type){

    }
   if(advert.category){

    }
  advert.summ = (14 + 5)*advert.words;
 }
//end summ 
var view = document.getElementById("view").value;
var category = document.getElementById("category").value;
var pricing = document.getElementById('ad-price');
var tech = document.getElementById('ad-price2');


advert.countwords();
advert.getsumm();
//alert("Symbols = " + somelen + "\nSymbols in words = " + colnotwhite.toString(10) + "\nWords = " + wordcount.toString(10));
 alert(advert.text+" "+advert.words+" "+advert.summ);
var ad2text = document.getElementById("ad-text").value + " " + advert.summ + " рублей";

pricing.innerHTML = ad2text+advert.text;

var techcont = advert.text + ' ' + advert.words+ advert.summ + ' ' + advert.category + ' ' + advert.type;
tech.innerHTML = techcont;
}//end function

