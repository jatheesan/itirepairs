let  cookieModel = document.querySelector(".cookie-consent-model");
let cancelCookieBtn = document.querySelector(".btn.cancel");
let acceptCookieBtn = document.querySelector(".btn.accept");

cancelCookieBtn.addEventListener("click", function (){
    cookieModel.classList.remove("active")
})
acceptCookieBtn.addEventListener("click", function (){
    document.cookie = "CookieBy=ITIrepair; max-age="+60*60*24*30;
    localStorage.setItem("cookieAccepted", "yes")
    cookieModel.classList.remove("active")
})

setTimeout(function (){
    cookieAccepted = localStorage.getItem("cookieAccepted")
    let checkCookie = document.cookie.indexOf("CookieBy=ITIrepair");
    // console.log(checkCookie)
    if(cookieAccepted != "yes" && checkCookie != 0){
        cookieModel.classList.add("active")
    }
}, 2000)