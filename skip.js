var skipButton = document.getElementById("yourls-once");
var counter = 5;
var newElement = document.createElement("p");
newElement.innerHTML = "..:Please Wait:..";
var id;

skipButton.parentNode.replaceChild(newElement, skipButton);

id = setInterval(function() {
    counter--;
    if(counter < 0) {
        newElement.parentNode.replaceChild(skipButton, newElement);
        clearInterval(id);
    } else {
        newElement.innerHTML = "Skip AD in " + counter.toString() + " seconds.";
    }
}, 1000);
