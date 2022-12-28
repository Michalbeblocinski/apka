const form = document.querySelector(".searchForm")
continueBtn = form.querySelector(".button input")
errorText = form.querySelector(".error-txt")

form.onsubmit = (e) => {
    e.preventDefault();
}
let flag1 = false;
let reloadSite = () => {
    window.location.reload();
    flag1 = true;
}
// Ajax
continueBtn.onclick = () => {
   let xhr = new XMLHttpRequest(); 
   xhr.open("POST", "backend/search.php", true);
   xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200) {
                let data = xhr.response;
                console.log(data);
                if ( data === "Nie ma takich użytkowniów") {
                    errorText.textContent = data;
                    errorText.style.display = "block";
                } else if (data === "Wymagane wszystkie pola wypelnione") {
                    errorText.textContent = data;
                    errorText.style.display = "block";
                } else {
                    window.location.reload();
                }
                
               
            }
        }
   }
   
   let formData = new FormData(form);
   xhr.send(formData);
}

