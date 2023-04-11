const btns = document.querySelectorAll('li');
console.log(window.location.href.search('index.php'));

btns.forEach(element => {
    element.addEventListener('click', function(){
     switch(element.getAttribute("name")){
        case '1':
            if(window.location.href.search("index.php")>0){ 
                return
            }
            else
            window.location.href="/index.php";
        break
        case '2':
            if(window.location.href.search("AddUser.php")>0)
            return
        else
        window.location.href="/AddUser.php";
        break
     }
     
    })
});

