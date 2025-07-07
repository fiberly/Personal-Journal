   var enteredValue;

   var returnedValue;

   var addToJournal;





function setup() {
    
    //noCanvas();
    
   //enteredValue = createInput();

  //enteredValue = select("#enteredValue");


    enteredValue = select("#Entry");

   

   // should add an output for every symbol added to the p tag, commenting disables the new line for every added symbol or letter
   //enteredValue.input(addedText); 

   //enteredValue.changed(everyLetter);


   returnedValue = select("#returnedValue");

   addToJournal = select("#addToJournal");

    addToJournal.mousePressed(everyLetter);

}


/* for textbox p5
<textarea name = "Entry" id = "Entry" rows = "7" cols = "40" required = "required" placeholder = "Enter a new journal entry here --->"></textarea>
        
<button id = "addToJournal">Add to Journal</button>
*/




// enteredValue.value(); to print the textfield content to the console

var textBox = document.getElementsByName("Entry");


    function addedText() { 
       
        returnedValue.html(enteredValue.value());
        

        // sends input to the console
       // console.log(enteredValue.value());
       
       // update every symbol err letter entered
        //createP(enteredValue.value());
    }





   // adds an addition to the p tag for every new letter added
   function everyLetter() {

    
       createP(enteredValue.value());


    }




    window.onload = function () {

        const storageEntry = document.querySelector(".save");

        const words = document.querySelector(".word");

        const theButtonForSaving = document.querySelector(".saveButtonForText");

        const savedContent = localStorage.getItem("enteredText");

        if (storageEntry) {

            words.textContent = savedContent;

        }



        storageEntry.addEventListener("input", letter => {

          //  console.log(letter.target.value);

            words.textContent = letter.target.value



        });

        const localStorageSave = () => {
            localStorage.setItem("enteredText", words.textContent);
        }

        theButtonForSaving.addEventListener("click", localStorageSave);

    }





// when the user scrolls doen 20px this will show the button

// var theButtonForScrolling = document.getElementById("#ToTop");

// window.onscroll = function() { scrollFunction() };

// window.addEventListener("scroll", scrollFunction);

/*
const TopPage = document.querySelector("#ToTop");

window.addEventListener("scroll", () => {
if (window.pageYOffset > 300) {
    TopPage.classList.add(".active");
} else {
    TopPage.classList.remove(".active");
}

})
*/

/* 
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        
        theButtonForScrolling.style.display = "block";

    } else {
        
        theButtonForScrolling.style.display = "none";

    }
}
*/
/*
const theButtonForScrolling = document.querySelector(".ToTop");

window.addEventListener("scroll", () => {

if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {

    theButtonForScrolling.style.display = "block";
} else {
    theButtonForScrolling.style.display = "none";
}

})
*/

$(document).ready(function() {
    
    $(window).scroll(function() { 
    
        if ($(window).scrollTop() > 800) {
            $("#ToTop").fadeIn( {
                "display":"block", "pointer-events":"auto"
            });
        } else {
            $("#ToTop").fadeOut( {
                "display":"none", "pointer-events":"none"
    
    
            });
        }
    });
});








// hide/show buttons 
function HideShowButtonSep20() {

    var y = document.getElementById("Sep20");

    if (y.style.display === "none") {

    y.style.display = "block";

} else {

    y.style.display = "none";

  }
}


function HideShowButtonAug20() {
   
    var y = document.getElementById("Aug20");
    
    if (y.style.display === "none") {
       
        y.style.display = "block"; 
    
    } else {
        
        y.style.display = "none";

    }
}

function HideShowButtonJul20() {
   
    var y = document.getElementById("Jul20");

    if (y.style.display === "none") {
       
        y.style.display = "block"; 

    } else {
        y.style.display = "none";
    }
}

function HideShowButtonJun20() {

var y = document.getElementById("Jun20");

if (y.style.display === "none") {

    y.style.display = "block";

} else {

    y.style.display = "none";

}

}

function HideShowButtonMay20() {

    var y = document.getElementById("May20");
    
    if (y.style.display === "none") {
    
        y.style.display = "block";
    
    } else {
    
        y.style.display = "none";
    
    }
    
    }
    
    function HideShowButtonApr20() {

        var y = document.getElementById("Apr20");
        
        if (y.style.display === "none") {
        
            y.style.display = "block";
        
        } else {
        
            y.style.display = "none";
        
        }
        
        }

        function HideShowButtonMar20() {

            var y = document.getElementById("Mar20");
            
            if (y.style.display === "none") {
            
                y.style.display = "block";
            
            } else {
            
                y.style.display = "none";
            
            }
            
            }
            
        function HideShowButtonOct20() {

            var y = document.getElementById("Oct20");

            if (y.style.display === "none") {

                y.style.display = "block";

            } else {

                y.style.display = "none";
                
            }
        }


        function HideShowButtonNov20() {

            var y = document.getElementById("Nov20");

            if (y.style.display === "none") {

                y.style.display = "block";

            } else {

                y.style.display = "none";
                
            }
        }


        function HideShowButtonDec20() {

            var y = document.getElementById("Dec20");

            if (y.style.display === "none") {

                y.style.display = "block";

            } else {

                y.style.display = "none";
                
            }
        }


function year2020() {

    var y = document.getElementById("year2020");

    if (y.style.display === "none") {

        y.style.display = "block";

    } else {

        y.style.display = "none";

    }
}

function HideShowButtonJan21() {

    var y = document.getElementById("Jan21");

    if (y.style.display === "none") {

        y.style.display = "block";

    } else {

        y.style.display = "none";
        
    }
}

function HideShowButtonFeb21() {

    var y = document.getElementById("Feb21");

    if (y.style.display === "none") {

        y.style.display = "block";

    } else {

        y.style.display = "none";
        
    }
}


function HideShowButtonMar21() {

    var y = document.getElementById("Mar21");

    if (y.style.display === "none") {

        y.style.display = "block";

    } else {

        y.style.display = "none";
        
    }
}

function HideShowButtonApr21() {

    var y = document.getElementById("Apr21");

    if (y.style.display === "none") {

        y.style.display = "block";

    } else {

        y.style.display = "none";
        
    }
}

function HideShowButtonMay21() {

    var y = document.getElementById("May21");

    if (y.style.display === "none") {

        y.style.display = "block";

    } else {

        y.style.display = "none";
        
    }
}

function HideShowButtonJun21() {

    var y = document.getElementById("Jun21");

    if (y.style.display === "none") {

        y.style.display = "block";

    } else {

        y.style.display = "none";
        
    }
}


function HideShowButtonJul21() {

    var y = document.getElementById("Jul21");

    if (y.style.display === "none") {

        y.style.display = "block";

    } else {

        y.style.display = "none";
        
    }
}

function HideShowButtonAug21() {

    var y = document.getElementById("Aug21");

    if (y.style.display === "none") {

        y.style.display = "block";

    } else {

        y.style.display = "none";
        
    }
}