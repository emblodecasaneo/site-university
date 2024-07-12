const now = new Date().getTime();
            // Date de fin du compte à rebours (30 jours à partir de maintenant)
            const countdownDate = now + (30 * 24 * 60 * 60 * 1000);
    
            // Mise à jour du compte à rebours toutes les secondes
            const x = setInterval(function() {
    
                // Date et heure actuelles
                const now = new Date().getTime();
    
                // Calcul de la différence entre maintenant et la date de fin
                const distance = countdownDate - now;
    
                // Calcul des jours, heures, minutes et secondes restants
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
                // Affichage des résultats
                document.getElementById("days").innerHTML = days + "<br> Days";
                document.getElementById("hours").innerHTML = hours + "<br> Hours";
                document.getElementById("minutes").innerHTML = minutes + "<br> Minutes";
                document.getElementById("seconds").innerHTML = seconds + "<br> Secs";
    
                // Si le compte à rebours est terminé, afficher un message
                if (distance < 0) {
                    clearInterval(x);
                    document.querySelector(".time").innerHTML = "EXPIRED";
                }
            }, 1000);