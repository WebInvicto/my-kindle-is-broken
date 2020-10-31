const app = {

    init : function() {

        // Je cible les bouton "changer de vue"
        const btnElement = document.querySelector('.btn');

        // J'accroche l'event "click" sur le bouton
        btnElement.addEventListener('click', app.handlerClickBtn);
        


    },
    // Méthode responsable du changement de vue.
    handlerClickBtn : function(){
        console.log('Bouton "changer de vue" clické')

        // Je cible la div contenant la vue "Coverture".
        const divCoversElement = document.querySelector('.covers');

        // Je cible la div contenant la vue "Liste".
        const divListElement = document.querySelector('.list');

        // Je modifie les class pour que l'effet demander se réalise.
        divCoversElement.classList.toggle('none');
        divListElement.classList.toggle('block');
    }


}


window.addEventListener("DOMContentLoaded", app.init);