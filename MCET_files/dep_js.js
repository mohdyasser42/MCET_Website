function myFunction() {
  var less = document.getElementById("touch");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("toggle");

  if (less.style.display === "none") {
    less.style.display = "inherit";
    btnText.innerHTML = "Read More";
    moreText.style.display = "none";
  } else {
    less .style.display = "none";
    btnText.innerHTML = "Read Less"; 
    moreText.style.display = "inherit";
  }
}