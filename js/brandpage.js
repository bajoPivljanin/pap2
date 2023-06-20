const userLinks = document.querySelectorAll('.productLink');

userLinks.forEach(userLink => {
  userLink.addEventListener('click', function(e) {
    e.preventDefault()
    const id = e.currentTarget.getAttribute('name');
    window.location.href = `./brandArticles.php?idBrand=${window.btoa(id)}`;
   
  });
});
