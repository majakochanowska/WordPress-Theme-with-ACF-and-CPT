var show_button = document.getElementsByClassName('show-more');

for (var i = 0; i < show_button.length; i++) {
  show_button[i].addEventListener('click', function() {
    this.classList.toggle('active');

    var content = this.nextElementSibling;
    if (content.style.display === 'block') {
        content.style.display = 'none';
        this.innerHTML = showmore_vars.more;
    } else {
        content.style.display = 'block';
        this.innerHTML = showmore_vars.less;
    }
  });
}