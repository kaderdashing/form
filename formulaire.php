<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  
  <script src="script.js"></script>


    <!-- CSS only -->
   <!--  Copiez-collez la feuille de style <link> dans votre <head> avant toutes les autres feuilles de style pour charger notre CSS.-->
   

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/4e496ca6d3.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="style.css" rel="stylesheet">
    
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<style>
.grand {
    padding-left: 10%;
    margin-top: 5px;
    margin-left: 0%;
    margin-right: 20%;
    width: 80%;
    text-decoration: none;
}
.form-outline {
    margin-right: 20%;
    width: 80%;
    text-decoration: none;
    
}

.form-group {
    margin-right: 20%;
    width: 80%;
    text-decoration: none;
}


.form-outline i {
 
   /* transform: translateY(-100%); */
    cursor: pointer;
    transition: all 0.2s;
    
}
.form-outline i {
    left: 70%;
    display: flex;
    align-items: center;
   
 /*   transform: translateY(-20%); */
   
  }


table{
  margin-top: 10px;
}

.form-group i:hover {
  content: "\f000";
     color: blue;
}

p{
  cursor: pointer;
}



footer{
  margin-top: 10%;
}
.espace{
  margin-bottom: 25px;
}
.kader{
  border: none;
  width: 100%;
  border:0;
  outline:0; }
.kader:focus {outline:none!important;}
.table{
  
  border-color: grey;
}
body {
            font-family: 'Montserrat';
        }
        
        .text {
            font-size: 17px;
        }
        
        .moreText {
            display: none;
        }
        
        .read-more-btn.none {
            display: none;
        }
        
        .read-more-btn {
            padding: 15px 60px;
            background-color: black;
            color: white;
            border: none;
            outline: none;
            font-size: 20px;
            cursor: pointer;
            width: 80%;
            border-radius: 25px;
            
        }
        
        .read-more-btn:focus {
            color: rgb(141, 100, 237);
            border: 2px rgb(58, 57, 110);
            box-shadow: anim-shadow .3s forwards;
        }
        
        .text.show-more .moreText {
            display: inline;
            animation: fadeIn 2s ease-in both;
        }
        
        .text.show-more .moreText:nth-child(2) {
            animation-delay: 6s;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translate3d(0, -20%, 0);
            }
            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }




</style>


   </head>
   <header>
</header>
<body>
    
  <div class="container mt-5">
    <p><strong>j'ai deja mon compte Naksia </strong> <FONT COLOR="#ff0000"> *</p>  </FONT>





    <form method="POST">
            <div class="form-group">
                  <label for="exampleInputEmail1"></label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
<table width=80% border=1 >
    <tbody>
      <tr>
        <td width=70% >
            <div class="col">
    <div class="form-outline">
        <label for="exampleInputPassword1">
            <input type="password" class="kader" id="exampleInputPassword1" placeholder="mot de passe">
    </div>
</div>
</td>
<td width=10%  mt-3>
<div class="col">
    <div class="form-outline">

        <i class="far fa-eye"></i>
    </div>
    </td>
</div>
</tr>
</tbody>
</table>
<br>
  <hr>




             <button type="submit" class="btn btn-dark btn-lg btn-block mt-3  grand">se conecter</button>
    </form>
      </div>
      <div class="form-ou">
          <strong>  <p> ou </p> </strong>
      </div>
      <span>
        <div class="container mt-3">
      <p><strong>Nouveau sur Naksia </strong> <FONT COLOR="#ff0000"> *</p>  </FONT>
      </span> </div>
</div>
<hr>
<div class="text"><span class="moreText">
                <div class="container espace">
                    
              </div>
              
                <!-- --------------------------------------------------- Formulaire d'inscription ---------------------------------------------------------------------- -->
              
              <div class="container">
                <form>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                  <div class="col">
                    <div class="form-outline">
                      <input type="text" id="form3Example1" class="form-control" />
                      <label class="form-label" for="form3Example1">nom</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-outline">
                      <input type="text" id="form3Example2" class="form-control" />
                      <label class="form-label" for="form3Example2">prenom</label>
                    </div>
                  </div>
                </div>
              
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" class="form-control" />
                  <label class="form-label" for="form3Example3"> address Email</label>
                </div>
              
                <!--------------------------------- Password input --------------------------------------------------->
                <table width=80% border=1 >
                  <tbody>
                    <tr>
                      <td width=70% >
                          <div class="col">
                  <div class="form-outline">
                      <label for="exampleInputPassword1">
                          <input type="password" class="kader" id="exampleInputPassword1" placeholder="mot de passe">
                  </div>
              </div>
              </td>
              <td width=10%  mt-3>
              <div class="col">
                  <div class="form-outline">
              
                      <i class="far fa-eye"></i>
                  </div>
                  </td>
              </div>
              </tr>
              </tbody>
              </table>
                <!---------------------------- number phone --------------------------------------------- -->
                <form id="login" onsubmit="process(event)">
                <div class="form-group mt-3">
                          <p>Enter votre numero de telephone </p>
                          <input id="phone" type="tel" name="phone" class="form-control" />
                      </form>
                      <div class="alert alert-info" style="display: none;"></div> </div>
              
                <!------------------------------- Checkbox ------------------------------------------------->
                <div class="form-check d-flex justify-content-center mb-4">
                  <input
                    class="form-check-input me-2"
                    type="checkbox"
                    value=""
                    id="form2Example33"
                    
                  />
                  <label class="form-check-label" for="form2Example33"> J'accepte les <strong> CGU </strong> de Naksia
                    </label>
                </div>
              
                <!-- Submit button -->
                <button type="submit" class="btn btn-dark btn-lg btn-block mt-3 grand " style="margin-bottom: 10px;">s'inscrire</button>
              
                <!-- Register buttons -->
                <div class="text-center">
                  <p>s'inscrire avec</p>
                  <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>
              
                  <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-google"></i>
                  </button>
              
              
                </div>
              </form>
              
    </div></span>
          <div class="container">
            <button type="submit" class="read-more-btn">cree compte</button>
            </div>



        </div>









  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>






<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example29" class="form-control" />
              <label class="form-label" for="form5Example29">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
    
<!---------------------------------------- javascript---------------------------------------------------------- -->
</body>
<script>
    const phoneInputField = document.querySelector("#phone");
    const info = document.querySelector(".alert-info");

    function process(event) {
        event.preventDefault();

        const phoneNumber = phoneInput.getNumber();

        info.style.display = "";
        info.innerHTML = `Phone number in E.164 format: <strong>${phoneNumber}</strong>`;
    }

    function getIp(callback) {
        fetch('https://ipinfo.io/json?token=75a9af7a2c4e78', {
                headers: {
                    'Accept': 'application/json'
                }
            })
            .then((resp) => resp.json())
            .catch(() => {
                return {
                    country: 'fr',
                };
            })
            .then((resp) => callback(resp.country));
    }

    const phoneInput = window.intlTelInput(phoneInputField, {
        initialCountry: "auto",
        geoIpLookup: getIp,
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });




    
    var c = document.querySelectorAll('i')[0]
var classes = c.classList.contains("fa-eye")
const passwordfile = document.querySelectorAll('input[type=password]')[0]
var change = function() {
    if (classes === null) {
        c.classList.remove("far", "fa-eye-slash")
        c.classList.add("far", "fa-eye")

    } else {
        c.classList.remove("far", "fa-eye")
        c.classList.add("far", "fa-eye-slash")
        passwordfile.type = "text"
    }
}
if (c) {
    c.addEventListener('click', change)
}




var v = document.querySelectorAll('i')[1]

var classes = v.classList.contains("fa-eye")
const wax = document.querySelectorAll('input[type=password]')[1]
var change = function() {
    if (classes === null) {
        v.classList.remove("far", "fa-eye-slash")
        v.classList.add("far", "fa-eye")

    } else {
        v.classList.remove("far", "fa-eye")
        v.classList.add("far", "fa-eye-slash")
        wax.type = "text"
    }
}
if (v) {
    v.addEventListener('click', change)
}


const readMoreBtn = document.querySelector('.read-more-btn');
            const text = document.querySelector('.text');
            readMoreBtn.addEventListener('click', (e) => {
                text.classList.toggle('show-more');
                readMoreBtn.classList.add('none');
            })

</script>
</html>