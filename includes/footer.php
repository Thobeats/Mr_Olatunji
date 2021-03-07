<footer>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5 col-lg-4">
                        <div class="footer-logo text-center">
                            <img src=" assets/img/logo/Group 1Frame 1.png" alt="Family and Marriage Counselling Affairs">
                        </div>
                    </div>

                    <div class="col-12 col-md-7 col-lg-8 py-3">
                        <div class="footer-social text-center text-light">
                             <div class="row justify-content-center">
                                 <div class="col-lg-3 col-md-4 col-4">
                                   <p> <i class="bi bi-envelope"></i></p>
                                   <p class="footer-text">email us</p>
                                 </div>
                                 <div class="col-lg-3 col-md-4 col-4">
                                    <p><i class="bi bi-facebook"></i></p>
                                    <p class="footer-text">make us your friend</p>
                                 </div>
                                 <div class="col-lg-3 col-md-4 col-4">
                                    <p><i class="bi bi-twitter"></i></p>
                                    <p class="footer-text">Follow us</p>
                                 </div>
                             </div>
                        </div>
                    </div>
                </div>

                <div class="row copyright bottom-0 positiion-absolute">
                    <div class="col-12 text-center text-light">
                        <p>
                            copyright(c)  <span class="date"></span> Family Affairs. All rights deserved <br>
                            Designed By Dev Tobi
                        </p>
                        
                    </div>
                </div>
            </div>

        </footer>


    </main>
    

    <!-- Bootstrap Script Files -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script>
        let date = document.querySelector(".date");

        date.innerHTML = new Date().getFullYear();

        let navToggle = document.querySelector(".responsive-menu");
        let navMenu = document.querySelector(".responsive-menu-list");

        navToggle.addEventListener("click", function(){
            navMenu.classList.toggle("show-menu");
            this.classList.toggle("rotate-menu");
        });


        //
    </script>
</body>
</html>