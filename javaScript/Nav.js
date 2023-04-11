const btns = document.querySelectorAll('li');


btns.forEach(element => {
    element.addEventListener('click', function(){
     switch(element.getAttribute("name")){
        case '1':
            if(window.location.href.search("index.php")){ 
               window.location.href="/index.php";
               console.log("asd")
            }
            else
            console.log("asd")
        break
        case '2':
            if(window.location.href.search("AddUser.php"))
              window.location.href="/AddUser.php";
        else
        return
        break
     }
     
    })
});

console.log(window.location.href);