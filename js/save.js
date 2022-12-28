const form1 = document.querySelector(".save")
continueBtn = form1.querySelector("button ")


form1.onsubmit = (e) => {
   
    e.preventDefault();
}


// Ajax
continueBtn.onclick = () => {
    
       
    
   let xhr = new XMLHttpRequest(); 
   xhr.open("POST", "backend/save.php", true);
   xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200) {
                
                let data = xhr.response;
                console.log(data);
                var list;
                list = document.getElementById("alertt");            
               list.classList.add('showme');
               list.classList.remove("noshowme");
                if ( data === "success") {
                    location.href = "main.php";
                } else {
                    
                    
                }
            }
        }
   }
   
   let formData = new FormData(form1);
   xhr.send(formData);
}

