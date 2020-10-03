const loginForm = document.querySelector('#login');
// listen for submit even
loginForm.addEventListener('submit', (event) => {

    // disable default action
    event.preventDefault();

    // configure a request
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/users/login');

    // prepare form data
    let data = new FormData(loginForm);

    // set headers
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.setRequestHeader('Accept', 'application/json');

    // send request
    xhr.send(data);

    // listen for `load` event
    xhr.onload = () => {
        const response = JSON.parse(xhr.responseText);
        if (response.valid) {
            loginForm.style.display = 'none';
            loginForm.outerHTML = 'You are now logged in via ajax ' + response.identity.first_name;
        } else {
            alert('Invalid credentials!');
        }
    }
});
