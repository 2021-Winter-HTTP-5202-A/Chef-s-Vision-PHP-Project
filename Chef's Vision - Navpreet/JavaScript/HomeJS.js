
var searchButton = document.getElementById("search-button");
var searchInput = document.getElementById("search-input");


function formHandle(){
    alert(searchInput.value);
}
searchButton.onclick = formHandle;