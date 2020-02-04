window.onlaod = start;

function start() {
    const eleMinus = document.querySelector("#minus");
    const elePlus = document.querySelector("#plus");
    const eleAntal = document.querySelector("#antal");

    elePlus.addEventListener("click", plusa);
    function plusa() {
        var antal = parseInt(eleAntal.textContent);
        antal = antal + 1;
        eleAntal.textContent = antal;

        
    }
    eleMinus.addEventListener("click", minusa);
    function minusa() {
        var antal = parseInt(eleAntal.textContent); 
        antal = antal + 1;
        eleAntal.textContent = antal;

        
    }

}