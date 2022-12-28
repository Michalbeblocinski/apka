
const form = document.querySelector(".editForm")
editFormBtn = form.querySelector(".button input")
errorText = form.querySelector(".error-txt")

form.onsubmit = (e) => {
    e.preventDefault();
}

// Ajax
editFormBtn.onclick = () => {
   let xhr = new XMLHttpRequest(); 
   xhr.open("POST", "backend/editProfile.php", true);
   xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200) {
                let data = xhr.response;
                let success = "success";
                let preferencje = " Preferencje zaaktualizowane";
                console.log(data);
                if ( data.includes(success)) {
                    console.log("zapisane");
                    //location.href = "editProfile.php";
                    errorText.textContent = "Pomyślnie zapisano zmiany";
                    errorText.style.color = "#008000";
                    errorText.style.backgroundColor = "#90EE90";
                    errorText.style.borderColor = "#90EE90";
                    errorText.style.display = "block";
                } else if(data === ""){
                    console.log("nic sie nie zmienilo")
                }
                 else {
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
                } 
            }
        }
   
   
   let formData = new FormData(form);
   xhr.send(formData);
}
