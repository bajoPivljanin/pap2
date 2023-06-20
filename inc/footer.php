<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <p>Kontakt</p>
                    <i class="fa-sharp fa-solid fa-location-dot"></i><span>Lokacija xx</span>
                    <br>
                    <i class="fa-regular fa-envelope"></i><span>xxxx@podrska.com</span>
                    <br>
                    <i class="fa-solid fa-mobile-screen"></i><span>xxx xxx xxx</span>
                    <br>
                </div>
                <div class="col-md-3">
                    <p id="kfooter">Kategorije</p>
                    <ul>
                        <li><a href="man.php">Muskarci</a></li>
                        <li><a href="woman.php">Zene</a></li>
                        <li><a href="kid.php">Deca</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p>Informacije</p>
                    <ul>
                        <li><a href="#">Lorem</a></li>
                        <li><a href="#">Lorem</a></li>
                        <li><a href="#">Lorem</a></li>
                        <li><a href="#">Lorem</a></li>
                        <li><a href="#">Lorem</a></li>
                        <li><a href="#">Lorem</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p>O prodavnici</p>
                    <ul>
                        <li><a href="#">Lorem</a></li>
                        <li><a href="#">Lorem</a></li>
                        <li><a href="#">Lorem</a></li>
                        <li><a href="#">Lorem</a></li>
                    </ul>
                </div>
            </div>
        <p id="copy">Copyright Momcadija</p>
            </footer>
        </div>
   </body>
   <script src="js/scipt.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            /*autoplay:{
                delay:4000,
                disableOnInteraction:false,
            },*/
            loop: true,

            pagination: {
                el: '.swiper-pagination',
                clickable:true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });
    </script>
</html>