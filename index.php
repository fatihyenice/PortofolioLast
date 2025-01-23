<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Projet</title>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
		integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=stat_minus_3" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/assets/styles/app.css" />
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_circle_right" />
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=menu" />
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=keyboard_double_arrow_right" />
</head>
<?php require 'header.php'; ?>

<section id="homeMenu" class="animate__animated animate__fadeInLeft">
	<div class="flex_adapter_telephone">
		<div class="flex_center_moi">
			<img src="/assets/img/pc.png" class="pcimg" width="700">
			<div id="bulle_avatarRecupJs" class="avatar_bulle" onclick="enterSite()">
				<a href="#">
					<img class="milieu" id="bulle_widthRecupJs" src="/assets/img/prof.png" width="400">
				</a>
			</div>

			<div id="adaptationtelephone">
				<span class="zoom_span_hello">Hello, je suis</span>
				<section class="animation">
					<div class="first">
						<div style="color:#fff;text-shadow: 0px 0px 2px #fff;">Yenice Fatih</div>
					</div>
					<div class="second">
						<div style="color:#fff;text-shadow: 0px 0px 2px #fff;">Développeur Web.</div>
					</div>
				</section>
			</div>

		</div>

		<div class="fleche_centerPlusMoi" onclick="enterSite()">
			<a href="#mainCorp">
				<img src="/assets/img/fleche_droite.png" id="fleche_basPlusSurMoi" alt="Flèche pointant la droite" />
			</a>
		</div>
	</div>

</section>

<section id="plusSurMoiSection">
	<div class="leftRightDecale">

		<div class="grid trois">
			<div class="chrome-window" style="background: url(/assets/img/construction.png)">
				<div class="chrome-header">
					<div class="window-buttons">
						<span class="button close"></span>
						<span class="button minimize"></span>
						<span class="button maximize"></span>
					</div>
					<div class="url-bar">
						<span class="url">https://</span>
						<input type="text" class="url-input" placeholder="www.fatihyenice.fr/techno_maitrise"
							disabled />
						<button class="reload">↻</button>
					</div>
				</div>

				<!-- Onglets -->
				<div class="tabs">
					<div class="tab active">TECHNOLOGIES maitrisées </div>
				</div>

				<!-- Contenu principal -->
				<div class="chrome-content_special">
					<div class="grid_bulle_techno">
						<div class="rondtechno">
							<img src="/assets/img/html.png" class="bougeRond" alt="Logo du HTML">
						</div>
						<div class="rondtechno">
							<img src="/assets/img/css.png" class="bougeRond" alt="Logo du HTML">
						</div>
						<div class="rondtechno">
							<img src="/assets/img/php.png" class="bougeRond" alt="Logo du HTML">
						</div>
						<div class="rondtechno">
							<img src="/assets/img/js.png" class="bougeRond" alt="Logo du HTML">
						</div>
						<div class="rondtechno">
							<img src="/assets/img/symfony.png" class="bougeRond" alt="Logo du HTML">
						</div>
					</div>

				</div>
			</div>

			<div class="chrome-window" style="background: transparent;box-shadow: none;">
				<div id="bulle_avatarRecupJs" class="avatar_bulle_center_home">
					<img class="milieu" id="bulle_widthRecupJs" src="/assets/img/prof.png" width="400" />
				</div>
			</div>

			<div class="chrome-window">
				<div class="chrome-header">
					<div class="window-buttons">
						<span class="button close"></span>
						<span class="button minimize"></span>
						<span class="button maximize"></span>
					</div>
					<div class="url-bar">
						<span class="url">https://</span>
						<input type="text" class="url-input" placeholder="www.fatihyenice.fr/apprendre_a_me_connaitre"
							disabled />
						<button class="reload">↻</button>
					</div>
				</div>

				<div class="tabs">
					<div class="tab active">Apprendre à me connaitre</div>
				</div>

				<!-- Contenu principal -->
				<div style="padding: 20px">
					<div class="chrome-content_special_apprendre">
						<img class="centermr" src="/assets/img/mr_profil.png" width="150">
						<h1 style="text-align:center;">Fatih YENICE</h1><br>
						Depuis mon plus jeune âge, j'ai été captivé par le <strong>monde du développement web</strong>.
						La
						possibilité de créer des expériences uniques et interactives en ligne a toujours suscité ma
						curiosité et alimenté ma passion pour la technologie.
						</br> </br>
						Cependant, confronté aux défis de la vie quotidienne et désireux d'acquérir une certaine
						indépendance financière, j'ai choisi de travailler dans divers petits boulots dès mon plus jeune
						âge. Ces expériences m'ont permis d'apprendre la valeur du travail acharné, de la persévérance
						et de
						la gestion des priorités.

						Malgré ces détours, ma passion pour le développement web n'a jamais faibli. Aujourd'hui, je
						saisis
						l'opportunité de <strong>suivre ma formation en développement web</strong>. Cette décision
						reflète
						mon engagement indéfectible à poursuivre mes rêves, peu importe les obstacles rencontrés en
						cours de
						route.

						</br></br>
						<strong>À travers chaque ligne de code que j'écris, je cherche à apporter ma contribution au
							monde
							du web et à inspirer les autres par mon dévouement et ma détermination</strong>.

					</div>
				</div>


			</div>
		</div>

		<div class="auto">
			<div class="chrome-window_cv">
				<div class="chrome-header">
					<div class="window-buttons">
						<span class="button close"></span>
						<span class="button minimize"></span>
						<span class="button maximize"></span>
					</div>
					<div class="url-bar">
						<span class="url">https://</span>
						<input type="text" class="url-input" placeholder="www.fatihyenice.fr/mon_cv" disabled />
						<button class="reload">↻</button>
					</div>
				</div>

				<!-- Contenu principal -->
				<div style="padding: 20px">
					<div class="chrome-content_special_apprendre">
						<h2 class="moncvtext">Mon C.V.</h2><br>
						<h2 class="moncura">Curriculum vitæ</h2><br>

						<a href="/assets/pdf/moncv.pdf" target="_blank"><img src="/assets/img/MonCV.png"
								class="border_cv" alt="Photo du CV à Fatih" /></a>
					</div>
				</div>
			</div>

		</div>
</section>

<section id="realisationSection">
	<div class="leftRightDecale">

		<div class="chrome-window" style="border-radius: 10px 10px 0px 0px;">
			<p class="pdg_dixpx">Ici, vous y trouverez une sélection de sites internet et d'applications que j'ai
				conçus, développés
				et optimisés. Chaque projet reflète mon expertise en création de solutions. Cliquez sur un projet pour
				en savoir plus !</p>
		</div>



		<div class="chrome-window" style="border-radius: 0px 0px 10px 10px; margin-bottom: 60px;">
			<div class="chrome-header">
				<div class="window-buttons">
					<span class="button close"></span>
					<span class="button minimize"></span>
					<span class="button maximize"></span>
				</div>
				<div class="url-bar">
					<span class="url">https://</span>
					<input type="text" class="url-input" placeholder="www.fatihyenice.fr/mes_realisations" disabled />
					<button class="reload">↻</button>
				</div>
			</div>

			<div class="tabs">
				<div class="tab active">Mes réalisations</div>
			</div>

			<div class="portfolio-container">

				<div class="projects-grid">
					<div class="warning_message">
						Il n'y a aucune réalisation pour l'instant.
					</div>
					<!-- 
						<div class="project-card">
							<img src="https://placehold.co/300x150/EEE/31343C" alt="Aperçu du site" class="project-image">
							<div class="project-content">
								<h3 class="project-title">Projet en cours</h3>
								<p class="project-description">Un site vitrine moderne pour une entreprise locale.</p>
								<a href="#" class="project-link">Voir le projet</a>
							</div>
						</div>

						<div class="project-card">
							<img src="https://placehold.co/300x150/EEE/31343C" alt="Aperçu du site" class="project-image">
							<div class="project-content">
								<h3 class="project-title">Projet en cours</h3>
								<p class="project-description">Un e-commerce avec paiement intégré et design responsive.
								</p>
								<a href="#" class="project-link">Voir le projet</a>
							</div>
						</div> -->

				</div>
			</div>
		</div>
	</div>
	</div>
</section>

<section id="contactSection">
	<div class="leftRightDecale">

		<div class="griddeuxun">
			<div class="chrome-window" style="margin-bottom: 30px;">
				<div class="chrome-header">
					<div class="window-buttons">
						<span class="button close"></span>
						<span class="button minimize"></span>
						<span class="button maximize"></span>
					</div>
					<div class="url-bar">
						<span class="url">https://</span>
						<input type="text" class="url-input" placeholder="www.fatihyenice.fr/contact"
							disabled />
						<button class="reload">↻</button>
					</div>
				</div>

				<!-- Onglets -->
				<div class="tabs">
					<div class="tab active">Me contacter</div>
				</div>

				 
				<div class="chrome-content_special">  
				<span id="error_alerte" class="alert_erreur"></span>

					<form id="formulaire_contacte" class="formulaire__contact">
						<label class="label">Votre prénom: </label><input type="text" id="contact_name" name="name"
							required="required" class="input" placeholder="Fatih" />
						<label class="label">Votre nom: </label><input type="text" id="contact_lastname" name="lastname"
							required="required" class="input" placeholder="Fatih" />
						<label class="label">Votre adresse mail: </label><input type="email" id="contact_mail"
							name="mail" required="required" class="input" placeholder="azerty@exemple.com" />
						<label class="label">La raison: </label><textarea id="contact_raison" name="textarea"
							required="required" class="textarea" placeholder="Pour quel raison ?"></textarea>
						<button type="reset" id="contact_cancel" name="contact[cancel]"
							class="cancel__clean">Effacer</button>
						<button type="submit" id="contact_submit" name="contact[submit]"
							class="submit__validate">Envoyer</button>
						<input type="hidden" id="contact__token" name="contact[_token]"
							value="068a2.RPZmkI06_8a5QbWE7c0Uzunj6AfROZscbFAtEqzSgqM.G4dL8coPjqTMbPn9hJdMr7yA0UClct92LxFKZ_-z1O0FxhTyz2-qgswg-A" />
					</form>
				</div>
			</div>

			<div class="chrome-window" style="margin-bottom: 60px;">
				<div class="chrome-header">
					<div class="window-buttons">
						<span class="button close"></span>
						<span class="button minimize"></span>
						<span class="button maximize"></span>
					</div>
					<div class="url-bar">
						<span class="url">https://</span>
						<input type="text" class="url-input" placeholder="www.fatihyenice.fr/coordonnees"
							disabled />
						<button class="reload">↻</button>
					</div>
				</div>

				<div class="chrome-content_special">  
					<h2 class="hdeuxcoor">Mes coordonnées</h2> 

					<a href="mailto:fatih.ydev@gmail.com" id="mailto_m_mail">
						<div class="coor_style">
							fatih.ydev@gmail.com</a> <svg xmlns="http://www.w3.org/2000/svg" height="30px" style="float:right;" viewBox="0 -960 960 960" width="30px" fill="#A0854C"><path d="m720-160-56-56 63-64H560v-80h167l-63-64 56-56 160 160-160 160ZM160-280q-33 0-56.5-23.5T80-360v-400q0-33 23.5-56.5T160-840h520q33 0 56.5 23.5T760-760v204q-10-2-20-3t-20-1q-10 0-20 .5t-20 2.5v-147L416-520 160-703v343h323q-2 10-2.5 20t-.5 20q0 10 1 20t3 20H160Zm58-480 198 142 204-142H218Zm-58 400v-400 400Z"/></svg>
						</div>
					</a>

					<a href="https://github.com/fatihyenice" id="mailto_m_mail" target="_blank">
						<div class="coor_style">
							MY GITHUB</a> <img src="/assets/img/25231.png" width="25" style="float:right; margin-right: 4px;" alt="Icon de GITHUB"/>
						</div>
					</a>

					<a href="https://www.linkedin.com/in/fatih-yenice-296b17290/" target="_blank" id="mailto_m_mail" target="_blank">
						<div class="coor_style">
						MY LINKED</a> <img src="/assets/img/174857.png" width="25" style="float:right; margin-right: 4px;" alt="Icon de LinkeDin"/>
						</div> 
					</a>
				</div>
			</div>



		</div>

	</div>
</section>

<div id="container_footer">
	<div class="footer">
		Fatih YENICE ©
	</div>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="/assets/styles/app.js"></script>

</script>
</body>

</html>