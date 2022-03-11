const { forEach } = require("lodash");

require("@fortawesome/fontawesome");
require("@fortawesome/fontawesome-free-solid");
require("@fortawesome/fontawesome-free-regular");
require("@fortawesome/fontawesome-free-brands");

require("./bootstrap");

// tramite javascript, quando l’utente clicca sul pulsante “delete”, chiedere conferma della cancellazione, prima di eliminare l’elemento.

const elimina = document.querySelector(".elimina");


elimina.addEventListener("click", deleteComic);

function deleteComic() {
    if (confirm("Are you sure you want to delete this comic")) {
        // Save it!
        console.log("Comic deleted");
    } else {
        // Do nothing!
        this.disabled = true;
        setTimeout(() => {
            this.disabled = false;
        }, 100);
    }
}
