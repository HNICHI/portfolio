// Menu

function scrollToBottom() {
  var elmnt = document.getElementById("about");
  elmnt.scrollIntoView();
}

// CV Video 
function cv() {
 pupapa.style.display="block";
 closeBtn.style.display="inline-block";
 video.play();
}

function closer() {
 
  closeBtn.style.display="none";
  pupapa.style.display="none";
  video.pause()
}
var video = document.getElementById('vid');
var pupapa = document.querySelector('.popup');
var on = document.querySelector('.button');
on.addEventListener('click', cv)
var closeBtn= document.querySelector('.close');
closeBtn.addEventListener('click', closer)



//About Me

function x(){
  
    document.getElementById("bio").style.display = "none";
    document.getElementById("Personal").style.display = "block";
} 
function y(){
  
    document.getElementById("bio").style.display = "block";
    document.getElementById("Personal").style.display = "none";
} 



// Education

$(document).ready(function(){
  var zindex = 10;
  
  $("div.card").click(function(e){
    e.preventDefault();

    var isShowing = false;

    if ($(this).hasClass("show")) {
      isShowing = true
    }

    if ($("div.cards").hasClass("showing")) {
      // a card is already in view
      $("div.card.show")
        .removeClass("show");

      if (isShowing) {
        // this card was showing - reset the grid
        $("div.cards")
          .removeClass("showing");
      } else {
        // this card isn't showing - get in with it
        $(this)
          .css({zIndex: zindex})
          .addClass("show");

      }

      zindex++;

    } else {
      // no cards in view
      $("div.cards")
        .addClass("showing");
      $(this)
        .css({zIndex:zindex})
        .addClass("show");

      zindex++;
    }
    
  });
});


// Skills


  element80 = document.getElementById("a1");
  element70 = document.getElementById("a2");
  element60 = document.getElementById("a3");
  element50 = document.getElementById("a4");
  element40 = document.getElementById("a5");
              a=0; b=0;c=0;d=0;e=0;

function start(){
  startint = setInterval(zid,38);}

function stop(){
  clearInterval(startint);}
  

function zid(){
  if(a<80){
    a++;
    element80.textContent = a + "%";
  };
    
  if(b<70){
    b++;
    element70.textContent = b + "%";
   };

  if(c<60){
    c++;
    element60.textContent = c + "%";
  };
  if(d<50){
    d++;
    element50.textContent = d + "%";
  };
  if(d<=40){
    e++;
    element40.textContent = e + "%";
  };    
}
start();


function myFunction3() {
  var skills = document.getElementById("SKILLS");
  skills.scrollIntoView();
}




// portfolio


 filterSelection("all") // Execute the function and show all columns
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}



// LOADING

var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 1000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myLoad").style.display = "block";
}


// BUTTON TO TOP

// When the user scrolls down 20px from the top of the document, show the button
// window.onscroll = function() {scrollFunction()};

// function scrollFunction() {
//   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//     document.getElementById("myBtn").style.display = "block";
    
//   } else {
//     document.getElementById("myBtn").style.display = "none";
//   }
// }

// When the user clicks on the button, scroll to the top of the document
// function topFunction() {
//   document.body.scrollTop = 0;
//   document.documentElement.scrollTop = 0;
// }


/* nav menu */
var about= Array.from(document.querySelectorAll('.navchild a'));
about.forEach(i=>i.addEventListener('mouseover', prepar))

function prepar(e){
var target = e.path[0];
add(target);
}
function add(tzadat){
  tzadat.classList.add("ajouter");
}

about.forEach(j=>j.addEventListener('mouseleave', prepar1));
function prepar1(t){
  var targe = t.path[0];
  console.log(targe);
  remo(targe)
}
function remo(mchat){
  mchat.classList.remove("ajouter");
}
