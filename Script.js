function rating() {
  var rate = document.getElementById("btn1");
  rate.addEventListener("click", function () {
    window.location.href = "success.html";
  });
}

function edit() {
  var Edit = document.getElementById("btn2");
  Edit.addEventListener("click", function () {
    window.location.href = "ViewEvaluation.php";
  });
}
