

function evenementFermer() {

    const maModale = document.getElementById('modal')
    maModale.style.display = 'none'
}

const monBoutonFermer = document.getElementById('bouton-fermer')

monBoutonFermer.addEventListener('click', evenementFermer)


const monBoutonAccepter = document.getElementById('bouton-accepter')
monBoutonAccepter.addEventListener('click', evenementFermer)