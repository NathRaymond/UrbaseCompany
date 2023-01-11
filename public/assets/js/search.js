$(document).ready(function() {
    myFunction();
  });



function myFunction() {
    var input, filter, ResultContainer, resultParent, resultName, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ResultContainer = document.getElementById("searchResultContainer");
    resultParent = ResultContainer.getElementsByClassName("searchResultParent");
    for (i = 0; i < resultParent.length; i++) {
        resultName = resultParent[i].getElementsByClassName("resultName")[0];
        txtValue = resultName.textContent || resultName.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            resultParent[i].style.display = "";
        } else {
            resultParent[i].style.display = "none";
        }
    }
}