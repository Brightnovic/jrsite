const modeSwitch = document.getElementById('mode-switch');

// Listen for click events on the mode switch button
modeSwitch.addEventListener('click', function () {
    // Get the body element
    const body = document.body;

    // Check if the body has the 'dark-mode' class
    const isDark = body.classList.contains('dark-mode');

    // If the body has the 'dark-mode' class, remove it. Otherwise, add it.
    if (isDark) {
        body.classList.remove('dark-mode');
    } else {
        body.classList.add('dark-mode');
    }
    /*   let elements = document.querySelectorAll(".bg-show");
      elements.forEach(function (element) {
          element.style.backgroundColor = "black"; */
});


modeSwitch.addEventListener('click', function () {
    var targetDiv = document.querySelector(".bg-show");
    targetDiv.style.backgroundColor = "black";
})
/* for future use */
/* const myButton = document.getElementById('mode-switch');
 
// Set the initial text content of the button
let buttonText = 'light mode';
myButton.textContent = buttonText;
// -------
// Listen for click events on the button
myButton.addEventListener('click', function () {
    // Toggle the text content of the button
    if (buttonText === 'light mode') {
        buttonText = 'dark mode';
    } else {
        buttonText = 'dark mode';
    }
    myButton.textContent = buttonText;
}); */



document.getElementById("comment-form").addEventListener("submit", function (event) {
    event.preventDefault();
    // Get input values
    var name = document.getElementById("name").value;
    var comment = document.getElementById("comment").value;
    // Create new comment element
    var newComment = document.createElement("div");
    newComment.innerHTML = "<h4>" + name + "</h4><p>" + comment + "</p>";
    // Add new comment element to comments container
    var commentsContainer = document.getElementById("comments");
    commentsContainer.appendChild(newComment);
    // Clear form fields
    document.getElementById("name").value = "";
    document.getElementById("comment").value = "";
});











