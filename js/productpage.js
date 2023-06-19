// $(".image").on('click',function(e) {
//     let id=$(e.currentTarget).attr('name');
//     window.location.href=`./productpage.php?idArtikal=${window.btoa(id)}`;    
// });
const userLinks = document.querySelectorAll('.productLink');

userLinks.forEach(userLink => {
  userLink.addEventListener('click', function(e) {
    e.preventDefault()
    const id = e.currentTarget.getAttribute('name');
    window.location.href = `./productpage.php?idArtikal=${window.btoa(id)}`;
   
  });
});
