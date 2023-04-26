const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input");

form.onsubmit = (e) => {
    e.preventDefault();
}

continueBtn.onclick = () => {
    // Starting Ajax
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE){
            if (xhr.status === 200){
                let data = xhr.response;
                console.log(data);
            }
        }
    }

    // sending form data to php through ajax
    let formData = new FormData(form); //creating new formData object
    xhr.send(formData); //sending form data to php
}