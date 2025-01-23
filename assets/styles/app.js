AOS.init();
	const header = document.getElementById("header")
	const homeSection = document.getElementById('homeMenu')
	const realisationSection = document.getElementById('realisationSection')
	const plusSurMoiSection = document.getElementById('plusSurMoiSection')
	const contactSection = document.getElementById('contactSection')

	function contact() {  
		closeMenuTel()
		homeSection.style.transition = "all 0.4s"
		homeSection.classList.remove('animate__animated')
		homeSection.classList.remove('animate__fadeInLeft')
		homeSection.classList.add('animate__animated')
		homeSection.classList.add('animate__slideOutLeft')

		setTimeout(function () {
			homeSection.style.display = 'none'
			plusSurMoiSection.style.display = 'none' 
			realisationSection.style.display = 'none' 
		}, 1000)

		setTimeout(function () {
			contactSection.className = ""
			contactSection.className = ""
			contactSection.classList.add('animate__animated')
			contactSection.classList.add('animate__slideInLeft')
			contactSection.style.display = 'block'

			// AFFICHAGE DU HEADER

			header.style.display = "block"
			header.style.transition = "all 6s"
			header.style.transition = "all 1s"
			header.style.transform = "scale(1)"
			header.style.opacity = "1"
			document.getElementById('realisation_active').style.background = "#fff"
			document.getElementById('aproposDeMoi').style.background = "#fff"
			document.getElementById('contactactive').style.background = "#ecf0f1"
			document.getElementById('flex').style.opacity = "1"
			header.style.height = "90px"
		}, 1200)
		document.getElementById('container_footer').style.display = 'block'
		window.scrollTo({ top: 0,
			behavior: "smooth",});
	}

	function realisation() {  
		closeMenuTel()
		homeSection.style.transition = "all 0.4s"
		homeSection.classList.remove('animate__animated')
		homeSection.classList.remove('animate__fadeInLeft')
		homeSection.classList.add('animate__animated')
		homeSection.classList.add('animate__slideOutLeft')

		setTimeout(function () {
			homeSection.style.display = 'none'
			plusSurMoiSection.style.display = 'none'
			contactSection.style.display = 'none' 
		}, 1000)

		setTimeout(function () {
			realisationSection.className = ""
			realisationSection.className = ""
			realisationSection.classList.add('animate__animated')
			realisationSection.classList.add('animate__slideInLeft')
			realisationSection.style.display = 'block'

			// AFFICHAGE DU HEADER

			header.style.display = "block"
			header.style.transition = "all 6s"
			header.style.transition = "all 1s"
			header.style.transform = "scale(1)"
			header.style.opacity = "1"
			document.getElementById('realisation_active').style.background = "#ecf0f1"
			document.getElementById('aproposDeMoi').style.background = "#fff"
			document.getElementById('contactactive').style.background = "#fff"
			document.getElementById('flex').style.opacity = "1"
			header.style.height = "90px"
		}, 1200)
		document.getElementById('container_footer').style.display = 'block'
		window.scrollTo({ top: 0,
			behavior: "smooth",});
	}


	// BOUTON PLUS SUR MOI
	function enterSite() {  
		closeMenuTel()
		homeSection.style.transition = "all 0.4s"
		homeSection.classList.remove('animate__animated')
		homeSection.classList.remove('animate__fadeInLeft')
		homeSection.classList.add('animate__animated')
		homeSection.classList.add('animate__slideOutLeft')
		
		setTimeout(function () {
			homeSection.style.display = 'none'
			realisationSection.style.display = 'none' 
			contactSection.style.display = 'none'  
		}, 1000)

		setTimeout(function () {
			plusSurMoiSection.className = ""
			plusSurMoiSection.className = ""
			plusSurMoiSection.classList.add('animate__animated')
			plusSurMoiSection.classList.add('animate__slideInLeft')
			plusSurMoiSection.style.display = 'block'

			// AFFICHAGE DU HEADER

			header.style.display = "block"
			header.style.transition = "all 6s"
			header.style.transition = "all 1s"
			header.style.transform = "scale(1)"
			header.style.opacity = "1"
			document.getElementById('aproposDeMoi').style.background = "#ecf0f1"
			document.getElementById('realisation_active').style.background = "#fff"
			document.getElementById('contactactive').style.background = "#fff"
			document.getElementById('flex').style.opacity = "1"
			header.style.height = "90px"
		}, 1200)
		document.getElementById('container_footer').style.display = 'block'
		window.scrollTo({ top: 0,
			behavior: "smooth",});
	}

	function Accueil() {
		closeMenuTel()
		if (homeSection.style.display == 'none') {
			plusSurMoiSection.classList.add('animate__animated')
			plusSurMoiSection.classList.add('animate__slideOutLeft')

			setTimeout(function () {
				plusSurMoiSection.style.display = 'none' 
				realisationSection.style.display = 'none' 
				contactSection.style.display = 'none'  
			}, 1000)

			setTimeout(function () {

				homeSection.classList.remove('animate__animated')
				homeSection.classList.remove('animate__slideOutLeft')
				homeSection.classList.add('animate__animated')
				homeSection.classList.add('animate__fadeInLeft')
				homeSection.style.display = 'block'

				// AFFICHAGE DU HEADER

				header.style.display = "none"
				header.style.transition = "all 6s"
				header.style.transition = "all 1s"
				document.getElementById('aproposDeMoi').style.background = "#fff"
				document.getElementById('realisation_active').style.background = "#fff"
			document.getElementById('contactactive').style.background = "#fff"
				document.getElementById('flex').style.opacity = "1"
				header.style.height = "90px"
			}, 1200);
			document.getElementById('container_footer').style.display = 'none'
			window.scrollTo({ top: 0,
				behavior: "smooth",});
		}
	}

	
	const elements = document.querySelectorAll('.rondtechno');
	elements.forEach(element => {
		let initialTransform = 'translate(0, 0)';  
		let radius = 10; 
		let angle = 5; 
		let moveInCircleInterval;

		function moveInCircle() {
			angle += 0.1;  

		
			const moveX = radius * Math.cos(angle)
			const moveY = radius * Math.sin(angle)
			element.style.transform = `translate(${moveX}px, ${moveY}px)`
		}

		// Fonction de mouvement avec la souris
		function handleMouseMove(e) {
			const rect = element.getBoundingClientRect();
			const mouseX = e.clientX - rect.left;
			const mouseY = e.clientY - rect.top;

			// Démarrer le mouvement circulaire quand la souris est sur l'élément
			if (!moveInCircleInterval) {
				moveInCircleInterval = setInterval(moveInCircle, 30);  // Crée un intervalle d'animation circulaire
			}
		}

		// Réinitialiser la position lorsque la souris quitte l'élément
		function handleMouseLeave() {
			clearInterval(moveInCircleInterval);  // Arrêter l'animation circulaire
			moveInCircleInterval = null;
			element.style.transform = initialTransform;  // Remet la position initiale de l'élément
		}

		// Attacher les événements
		element.addEventListener('mousemove', handleMouseMove);
		element.addEventListener('mouseleave', handleMouseLeave);
	}); 

	// MENU RETRECIS SUR TELEPHONE
	document.addEventListener('scroll', () => {
		if(window.getComputedStyle(header).position === 'fixed'){
				if(window.scrollY > 200) {
					header.style.height = '60px'
					header.style.opacity = '0.8'
					document.getElementById('recupLogo').style.fontSize = "35px"
					document.getElementById('recupLogo').style.marginTop = "-20px"
					document.getElementById('toggleImageButton').style.width = "30px"
					document.getElementById('toggleImageButton').style.marginTop = "0px"
					document.getElementById('toggleButtonId').style.height = "50px"
					document.getElementById('toggleButtonId').style.marginTop = "5px"
				}else{
					header.style.height = "90px"
					header.style.opacity = "1"
					document.getElementById('recupLogo').style.cssText = ""
					document.getElementById('toggleImageButton').style.cssText = ""
					document.getElementById('toggleButtonId').style.cssText = ""
				}
		}
	}) 
 
	document.addEventListener('keydown', function (event) {
		if (event.key === 'ArrowRight' || event.key === 'Enter') {
			enterSite()
		}

		if (event.key === 'ArrowLeft' || event.key === 'Escape') {
			Accueil()
		}
	});

	function openMenuTel(){
		document.getElementById('navigationMobileRight').style.transition = 'all 0.2s';
		document.getElementById('navigationMobileRight').style.display = 'block';

		setTimeout(function(){
			document.getElementById('navigationMobileRight').style.transform = 'translateX(0%)';
		}, 50)
	} 

	function closeMenuTel(){
		document.getElementById('navigationMobileRight').style.transition = 'all 0.2s';
		document.getElementById('navigationMobileRight').style.transform = 'translateX(100%)';
		setTimeout(function(){
			document.getElementById('navigationMobileRight').style.display = 'none';
		}, 50)
	}  

	// HOVER ROND IMAGE MAIN SECTION
	document.getElementById('bulle_avatarRecupJs').addEventListener('mouseover', () => {
		document.getElementById('bulle_widthRecupJs').style.transition = "all 0.6s"
		document.getElementById('bulle_widthRecupJs').width = "500"
		document.getElementById('bulle_widthRecupJs').style.marginTop = "-80px"
	})
	document.getElementById('bulle_avatarRecupJs').addEventListener('mouseout', () => {
		document.getElementById('bulle_widthRecupJs').style.transition = "all 0.4s"
		document.getElementById('bulle_widthRecupJs').width = "400"
		document.getElementById('bulle_widthRecupJs').style.marginTop = "-60px"
	})
 
	// SOUMISSION FORMULAIRE DE CONTACT
let boutonValider = document.getElementById('contact_submit');
boutonValider.addEventListener('click', () => {
  let contact_name = document.getElementById('contact_name');
  let contact_lastname = document.getElementById('contact_lastname');
  let contact_mail = document.getElementById('contact_mail');
  let contact_raison = document.getElementById('contact_raison');
  let error_alerte = document.getElementById('error_alerte');
 
      
      event.preventDefault(); // Empêche le rechargement de la page

      // Récupérer les données du formulaire
      const formData = new FormData(document.getElementById('formulaire_contacte'));

      // Envoyer les données via AJAX
      fetch("contact.php", {
          method: "POST",
          body: formData,
      })
      .then(response => response.json())
      .then(data => {
        if (data.status === "success") {
            // Message de succès personnalisé
            error_alerte.style.display = 'block';
            error_alerte.innerText = data.message || "Merci, votre message a été envoyé !";
            error_alerte.style.backgroundColor = "#6ab04c"; // Couleur verte pour indiquer le succès
            window.scrollTo({ top: 0, behavior: 'smooth' });
            contact_name.value = "";
            contact_lastname.value = "";
            contact_mail.value = "";
            contact_raison.value = "";
        } else {
            // Message d'erreur personnalisé
            error_alerte.style.display = 'block';
            error_alerte.innerText = data.message;
            error_alerte.style.backgroundColor = "#eb4d4b"; // Couleur verte pour indiquer le succès
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
      })
      .catch(error => {
          console.error("Erreur :", error);
          error_alerte.style.display = 'block'
          error_alerte.style.backgroundColor = "#eb4d4b"; 
          error_alerte.innerText = "Une erreur est survenue. Veuillez réessayer.";
          window.scrollTo({ top: 0, behavior: 'smooth' });
      });

 
})