const form = document.querySelector(".login form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-txt");

form.onsubmit = (e) => {
    e.preventDefault();
}

continueBtn.onclick = () => {
    // Starting Ajax
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/login.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE){
            if (xhr.status === 200){
                let data = xhr.response;
                console.log(data);
                if (data === "Success") {
                    location.href = "users.php";
                    // console.log("Working");
                    // return false;
                }
                else {
                    errorText.textContent = data;
                    errorText.style.display = "block";                    
                }
            }
        }
    }

    // sending form data to php through ajax
    let formData = new FormData(form); //creating new formData object
    xhr.send(formData); //sending form data to php
}