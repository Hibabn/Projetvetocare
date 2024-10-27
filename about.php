<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style2.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="acceuil">

   <section id="home">

		<div class="left">
			<h1> Votre <span id="mot">partenaire</span> pour le mieux-être de vos animaux</h1>
			<p>Bienvenue à VétoCare,<br>Notre équipe prend en charge votre animal <br>pour lui apporter les meilleurs soins et services </p>
			<a href="contact.php"><button type="button"><span id="bt"></span>Contact Us</button></a>
		</div>
			
		<div class="right">
			<img src="images\chien-slide.png">
		</div>
			
	</section>


   <section id="cadre">
			<div class="list">
				<div class="urgent">
					<i class="fa-sharp fa-solid fa-stethoscope"></i>
					<p>Consultations, urgences<br> et soins médicaux<br> 71-562-855</p>
				
				</div>
			</div>

			<div class="horaire">
				<div class="urgent2">
					<i class="fa-regular fa-calendar-plus"></i>
					<h3>Horaire</h3>

					<table id="table">
						<tr>
						<td width="120" >Lun au Ven</td>
						<td width="120">8:00 - 20:00</td>
						</tr>
						<tr>
						<td width="120">Sam</td>
						<td width="120">9:00 - 16:00</td>
						</tr>
						<tr>
						<td width="120">Dim</td>
						<td width="120">Fermé</td>
						</tr>
					</table>
				</div>

			</div>
	</section>




   <section class="trending-serv">
            <div class="center-text">
                <h2>Nos <span>Services</span></h2>
            </div>

            <div class="imagesexp">
                <div class="row">
                    <img src="images\medcine-general.jpg" alt="">
                    <div class="serv-text">
                        <h4>MEDECINE GENERALE</h4>
                    </div>
                </div>

                <div class="row">
                    <img src="images\chirurgie.jpg" alt="">
                    <div class="serv-text">
                        <h4>LA CHIRURGIE</h4>
                    </div>
                </div>

                <div class="row">
                    <img src="images\dent.jpg" alt="">
                    <div class="serv-text">
                        <h4>LA DENTISTERIE</h4>
                    </div>
                </div>

                <div class="row">
                    <img src="images\urgence.jpg" alt="">
                    <div class="serv-text">
                        <h4>SOINS D'URGENCES</h4>
                    </div>
                </div>

            </div>
        </section>



        <section class="equipe">
            <div class="txt_equipe">
                <h3>Nos <span>vétérinaires</span></h3>
            </div>

            <div class="imagesexp1">
                <div class="ligne">
                    <img src="images\img1.png" alt="">
                    <div class="equipe-text">
                        <h4>Dr Imen BenFraj</h4>
                    </div>
                </div>

                <div class="ligne">
                    <img src="images\img2.png" alt="">
                    <div class="equipe-text">
                        <h4>Dr Sabrina Côté</h4>
                    </div>
                </div>

                <div class="ligne">
                    <img src="images\img3.png" alt="">
                    <div class="equipe-text">
                        <h4>Dr imen Askri</h4>
                    </div>
                </div>

            </div>

            <div class="txt_equipe">
                <h3>Nos <span>techniciennes </span>vétérinaires</h3>
            </div>

            <div class="imagesexp1">
                <div class="ligne">
                    <img src="images\img4.png" alt="">
                    <div class="equipe-text">
                        <h4>Caroline Charland</h4>
                    </div>
                </div>

                <div class="ligne">
                    <img src="images\img5.png" alt="">
                    <div class="equipe-text">
                        <h4>Mélanie Corriveau</h4>
                    </div>
                </div>

                <div class="ligne">
                    <img src="images\img6.png" alt="">
                    <div class="equipe-text">
                        <h4>Rébecca Favrreau</h4>
                    </div>
                </div>

            </div>

            <div class="txt_equipe">
                <h3>Nos <span> animalières </span></h3>
            </div>

            <div class="imagesexp1">
                <div class="ligne">
                    <img src="images\img7.png" alt="">
                    <div class="equipe-text">
                        <h4>Hiba Askri</h4>
                    </div>
                </div>

                <div class="ligne">
                    <img src="images\img8.png" alt="">
                    <div class="equipe-text">
                        <h4>Audrey Denicourt</h4>
                    </div>
                </div>

                <div class="ligne">
                    <img src="images\img9.png" alt="">
                    <div class="equipe-text">
                        <h4>Chayma BenAmor</h4>
                    </div>
                </div>

            </div>
        </section>

        





<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>
</div>
<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>