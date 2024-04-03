// JAVASCRIPT FILE FOR THE SEARCH BAR FUNCTION IN THE MAIN PAGE
function searchMovies() {

  // DECLARES THE VALUES
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('searchInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("moviesList");
  li = ul.getElementsByTagName('li');

// LOOPS THROUGH MOVIE LIST, HIDES MOVIES THAT DON'T MATCH

// NOTE: UNABLE TO MAKE POSTERS THAT THE USER DOES NOT WANT TO SEE DISAPPEAR WHEN USER SEARCHES FOR A PARTICULAR MOVIE
  
 for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}

// ALLOWS MOVIE PAGES TO CYCLE THROUGH SCREENSHOTS TO FADE THROUGH IN MOVIE DESCRIPTIONS
let MovieSlideIndex = 1;
showMovieSlides(MovieSlideIndex);


function plusSlides(n) {
showMovieSlides(MovieSlideIndex += n);
}

function currentSlide(n) {
showMovieSlides(MovieSlideIndex = n);
}

function showMovieSlides(n) {
let MovieSlideIndex = 0;
showMovieSlides();

function showMovieSlides() {
let i;
let slides = document.getElementsByClassName("movieSlides");
for (i = 0; i < slides.length; i++) {
  slides[i].style.display = "none";
}
MovieSlideIndex++;
if (MovieSlideIndex > slides.length) {MovieSlideIndex = 1}
slides[MovieSlideIndex-1].style.display = "block";
setTimeout(showMovieSlides, 5000);
}
}