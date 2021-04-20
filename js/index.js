var header = document.getElementsByClassName("sidenav");
var listitem = header.getElementsByClassName("nav-list");
        var btns = header.getElementsByClassName("nav-name");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function () {
                var current = document.getElementsByClassName("active");
                if (current.length > 0) {
                    current[0].className = current[0].className.replace(" active", "");
                }
                this.className += " active";
            });
        }

function submit(){
    alert("This feature is currently unavailable.");
}
function resume(){
    alert("Currently not available.")
}