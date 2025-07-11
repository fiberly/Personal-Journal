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








// hide/show button



function HideShowButton() {

    var y = document.getElementById("HIDEJOURNALENTRIES");

    if (y.style.display === "none") {

        y.style.display = "block";

    } else {

        y.style.display = "none";
        
    }
}