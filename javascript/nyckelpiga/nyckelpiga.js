const eCanvas = document.querySelector("canvas");

eCanvas.width = 800;
eCanvas.height = 600;

var ctx = eCanvas.getContext("2d");
var piga = {
    x: 0,
    y: 0,
    rot: 0,
    bild: new Image()
}

var karta = [
    [0, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0],
    [0, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0],
    [0, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0],
    [0, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1],
    [0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
    [0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
    [0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
    [0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
    [0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
    [0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
    [0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
    [0, 0 ,0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],  
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
];

piga.rad =  0;
piga.kol =  0;
piga.bild.src = "./nyckelpiga.png";

var tileSheet = new Image();
tileSheet.src = "./tilesheet.png";

function ritaPiga() {
    ctx.save()
    ctx.translate(piga.kol * 50 + 25, piga.rad * 50 + 25);
    ctx.rotate(piga.rot);
    ctx.drawImage(piga.bild, -25, -25, 50, 50);
    ctx.restore();
    
}
function ritaKarta() {
    for (let rad = 0; rad < karta.length; rad++) {
        for (let kol = 0; kol < karta[rad].length; kol++) {
            if (karta[rad][kol] == 1) {
                var rutaPos = karta[rad][kol] * 32;
                ctx.drawImage(tileSheet, rutaPos, 0, 32, 32, kol * 50, rad * 50, 50, 50);   
            }  
        }   
    }  
}

window.addEventListener("keydown", function(e) {
    switch (e.key) {
        case "ArrowRight":
            if (karta[piga.rad][piga.kol + 1] == 0) {
                piga.kol++;
                
            }
            piga.kol ++;
            piga.rot = 90 * (Math. PI / 180);
            
        break;
        case "ArrowLeft":
            if (karta[piga.rad][piga.kol - 1] == 0) {
                piga.kol--;
                
            }
            piga.kol --;
            piga.rot = -90 * (Math. PI / 180);
                
        break;
        case "ArrowDown":
            if (karta[piga.rad + 1][piga.kol] == 0) {
                piga.rad++;
                
            }
            piga.rad ++;
            piga.rot = Math.PI;
                    
        break;
        case "ArrowUp":
            if (karta[piga.rad - 1][piga.kol] == 0) {
                piga.rad--;
                
            }
            piga.rad --;
            piga.rot = 0;
                        
        break;
    }
    
})

function gameLoop() {

    ctx.clearRect(0, 0, eCanvas.width, eCanvas.height);
    ritaKarta();

    ritaPiga();


    requestAnimationFrame(gameLoop);
    
}

gameLoop();