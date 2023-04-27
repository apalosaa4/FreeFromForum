window.onscroll = function() {
    scrollFunction();
    myFunction();
};

// When the user scrolls down 20px from the top of the document, show the button
let topButton = document.getElementById("btn-back-to-top");
function scrollFunction(){
    if(
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    )
    {
        topButton.style.display = "block";
    }
    else{
        topButton.style.display = "none";
    }
};


// When the user clicks on the button, scroll to the top of the document
topButton.addEventListener("click", backToTop);
function backToTop(){
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    document.body.scrollIntoView({behavior: "smooth"});
};

/*
//if you like the article it would change color and an alert woul pop up
let like = document.getElementById("liked-article");
like.addEventListener("click", heartChange);
function heartChange(){
    if(like.style.fill ="none")
    {
        like.style.fill ="#CB4552";
        alert("You liked this article!");
    }
    else{
        like.style.fill = "none";
        alert("You unliked this article!");
    }  
};
*/


// When the user scrolls the page, execute the progress bar fills
function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
};


/*
let translator = document.getElementById("google_translate_element");
let transbutton = document.getElementById("translate-button");
transbutton.addEventListener("click", showit)
function showit(){
    if(
        translator.style.display = "none"
    ){
        translator.style.display = "block";
    }
    else{
        translator.style.display = "none"
    }
}
*/


/*
//full page picture on click
function show() {
    imgs.forEach(img => {
    img.addEventListener('click', function() {
    fullPage.style.backgroundImage = 'img/' + img.src ;
    fullPage.style.display = 'block';
  });
});
}
const imgs = document.getElementById('picID');
const fullPage = document.querySelector('#fullpage');
*/


/*
// Switching to dark mode 
function myFunction() {
    var element = document.body;
    element.classList.toggle("dark-mode");
  }
*/


/*change the Translate button to X and back
let translate = document.getElementById("translate");
translate.addEventListener("click", function (e) {
    var target = e.target;

    target.classList.toggle("icon1");
    target.classList.toggle("icon2");},
    false);
*/



/*
$('.liked-articles, .btn-back-to-top').click(function(){
    switch(this.Clicking){
        case 'liked-articles' : {
            $('.liked-articles').style.fill = "#CB4552"
        }break;
        case 'btn-back-to-top' : {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
            document.body.scrollIntoView({behavior: "smooth"});
        }break;
    }
});
*/