//YOU CAN IGNORE THE BACKSLASHES BEFORE THE QUOTATION MARKS, 
//WHEN ADDING NEW CODE YOU DO NOT NEED TO ADD THEM. THEY WERE ADDED IN EARLY DEVELOPMENT.

function header_gen()
{
    var header = `<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"fontawesome/fontawesome.all.css\">
    <link rel=\"stylesheet\" href=\"css/footer.css\">

    <!--Bootstrap JS-->
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" 
    integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>

    <!--Favicon setup-->
    <link rel="shortcut icon" type=\"image/x-icon\" href=\"favicon.ico\" />`;

    document.write(header);
}

function navbar_gen()
{
    var navbar = `<nav class=\"navbar bg-light navbar-default navbar-expand-lg\" >
                    <a class=\"navbar-brand\" href=\"ActionCall_homepage.html\"> <img src=\"actioncallfinaldraft2.png\" alt=\"ActionCall logo image\"
                    style=\"width: 120px; height: auto;\" > </a>
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"active nav-item\"> <a class=\"nav-link\" href=\"ActionCall_homepage.html\"> Home</a> </li>
                        <li class=\"active nav-item\"> <a class=\"nav-link\" href=\"ActionCall_about_us.html\"> About Us </a></li>
                        <li class=\"active nav-item\"> <a class=\"nav-link\" href=\"ActionCall_forum.html\"> Forum</a> </li>
                        <li class=\"active nav-item\"> <a class=\"nav-link\" href=\"ActionCall_contact.html\"> Contact</a> </li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a class=\"nav-link\" href=\"ActionCall_sign_up.html\"> <i class=\"fas fa-users\"></i></span> Sign-Up </a> </li>
                        <li><a class=\"nav-link\" href=\"ActionCall_login.html\"> <i class=\"fas fa-sign-in-alt\"></i> Login </a></li>
                    </ul>
                    </nav>`;
    document.write(navbar);
}

function footer_gen()
{
    var footer = `<footer class=\"footer\" style=\"background-color: darkslategray; margin-top: 10px;\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5\">
                                <ul class=\"list-unstyled list-inline social text-center\">
                                    <li class=\"list-inline-item\"><a href=\"javascript:void();\"><i class=\"fab fa-facebook\"></i></a></li>
                                    <li class=\"list-inline-item\"><a href=\"javascript:void();\"><i class=\"fab fa-twitter\"></i></a></li>
                                    <li class=\"list-inline-item\"><a href=\"javascript:void();\"><i class=\"fab fa-instagram\"></i></a></li>
                                    <li class=\"list-inline-item\"><a href=\"javascript:void();\"><i class=\"fab fa-google-plus\"></i></a></li>
                                    <li class=\"list-inline-item\"><a href=\"javascript:void();\" target=\"_blank\"><i class=\"fa fa-envelope\"></i></a></li>
                                </ul>
                            </div>
                            </hr>
                        </div>	
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white\">
                                <p><i>ActionCall</i> is a work of Moavinis Angelos, Raitsidis Georgios-Anargyros, Romanos Georgios, Stavratis Konstantinos</p>
                                <p class=\"h6\">&copy All rights reserved.</p>
                            </div>
                            </hr>
                        </div>	
                    </div>
                    </footer>`;
    document.write(footer);
}


