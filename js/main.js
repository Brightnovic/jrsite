document.addEventListener('DOMContentLoaded', () => {
    const loginForm = document.getElementById('loginForm');

    loginForm.addEventListener('submit', (event) => {
        event.preventDefault();

        const formData = new FormData(loginForm);
        const email = formData.get('email');
        const password = formData.get('password');

        const data = {
            email: email,
            password: password
        };

        fetch('/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
            .then(response => response.json())
            .then(result => {
                if (result.error) {
                    console.error(result.error);
                    // Handle error case
                } else {
                    console.log(result.message);
                    // Handle success case
                }
            })
            .catch(error => {
                console.error(error);
                // Handle error case
            });
    });
});




/* function validateForm() {

    if (newPassword != confirmPassword) {
        alert("Passwords do not match!");
        return false;
    }
}
let newPassword = document.getElementById("new-password").value;
let confirmPassword = document.getElementById("confirm-password").value;

function checking() {
    let button = document.getElementById('button')
    button.addEventListener('click', () => {
        if (newPassword != confirmPassword) {
            alert('password not the')
        }
    }

    )
}
 */

