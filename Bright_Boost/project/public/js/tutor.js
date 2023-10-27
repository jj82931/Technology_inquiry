
function classNameGet() {
    var select = document.querySelectorAll(".className");
    
    Array.from(select).forEach(function(className) {
        className.addEventListener("click", function() {
            var text = className.innerText;
            sessionStorage.setItem("className", text);
        });
    });
}

function classNameLoad () {
    var className = sessionStorage.getItem("className");
    var activatedName = document.getElementById("activeName");
    var classTitle = document.getElementById("classTitle");
    activatedName.innerText = className;
    classTitle.innerText = className + " | Semester 1 | 2023";
}

/* 
    SQL query or back-end function
*/


function init(){

    if(window.location.pathname.endsWith("/t_manage_class.html")){
        classNameGet();
    }
    else if (window.location.pathname.endsWith("/t_classinfo.html")){
        classNameLoad();
        //SQL functioin or back-end function
    }
}



window.onload = init;