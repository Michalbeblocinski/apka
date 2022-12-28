const form = document.querySelector(".signup form")
continueBtn = form.querySelector(".button input")
errorText = form.querySelector(".error-txt")

form.onsubmit = (e) => {
    e.preventDefault();
}
// Ajax
continueBtn.onclick = () => {
   let xhr = new XMLHttpRequest(); 
   xhr.open("POST", "backend/signup.php", true);
   xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200) {
                let data = xhr.response;
                if ( data === "success") {
                    location.href = "editProfile.php";
                } else {
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            }
        }
   }
   
   let formData = new FormData(form);
   xhr.send(formData);
}

