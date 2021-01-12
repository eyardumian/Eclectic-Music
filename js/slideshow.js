var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 4000);
}

// var slideIndex = [1,1];
// var slideId = ["mySlides1", "mySlides2"]
// showDivs(1, 0);
// showDivs(1, 1);
//
// function plusDivs(n, no) {
//   showDivs(slideIndex[no] += n, no);
// }
//
// function showDivs(n, no) {
//   var i;
//   var x = document.getElementsByClassName(slideId[no]);
//   if (n > x.length) {slideIndex[no] = 1}
//   if (n < 1) {slideIndex[no] = x.length}
//   for (i = 0; i < x.length; i++) {
//      x[i].style.display = "none";
//   }
//   x[slideIndex[no]-1].style.display = "block";
// }
// </script>
