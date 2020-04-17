const eCanvas = document.querySelector("canvas");

eCanvas.width = 800;
eCanvas.height = 600;

var ctx = eCanvas.getContext("2d");

var gameOver = false;
 
var piga = {
    x: 0,
    y: 0,
    rot: 0,
    bild: new Image()
}
var monster = {
    x: 0,
    y: 0,
    bild: new Image()
}
var monster2 = {
    x: 0,
    y: 0,
    bild: new Image()
}
var monster3 = {
    x: 0,
    y: 0,
    bild: new Image()
}

var karta = [
    [4, 5, 6, 12, 4, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 6],
    [14, 0, 16, 12, 14, 0, 55, 0, 55, 0, 0, 55, 0, 0, 0, 16],
    [14, 0, 16, 12, 14, 0, 0, 0, 0, 0, 0, 55, 0, 0, 0, 16],
    [14, 0, 16, 12, 14, 0, 0, 0, 55, 0, 0, 0, 0, 0, 0, 16],
    [14, 0, 16, 12, 14, 0, 32, 33, 34, 0, 32, 33, 34, 0, 32, 16],
    [14, 0, 21, 5, 23, 0, 0, 0, 0, 0, 0, 0, 55, 0, 0, 16],
    [14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 55, 0, 0, 16],
    [14, 0, 0, 0, 0, 0, 0, 55, 0, 0, 0, 32, 33, 0, 33, 16],
    [14, 0, 0, 54, 0, 0, 33, 35, 33, 0, 0, 55, 0, 0, 0, 16],
    [14, 0, 0, 55, 0, 0, 0, 55, 0, 0, 33, 55, 0, 0, 0, 21],
    [14, 0, 0, 55, 0, 0, 0, 0, 0, 0, 0, 55, 0, 0, 0, 0],
    [24, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 26]
];

piga.rad =  1;
piga.kol =  1;
piga.bild.src = "./nyckelpiga.png";

monster.x = Math.ceil(Math.random() * 750)
monster.y = 0;
monster.bild.src = "./monster.png";
monster2.x = Math.ceil(Math.random() * 750)
monster2.y = 0;
monster2.bild.src = "./monster.png";
monster3.x = Math.ceil(Math.random() * 750)
monster3.y = 0;
monster3.bild.src = "./monster.png";

var tileSheet = new Image();
tileSheet.src = "./tileset-swamp.png";

ctx.font = "bold 96px Sans-serif"
ctx.textAlign = "center";

function ritaPiga() {
    ctx.save()
    ctx.translate(piga.kol * 50 + 25, piga.rad * 50 + 25);
    ctx.rotate(piga.rot);
    ctx.drawImage(piga.bild, -25, -25, 50, 50);
    ctx.restore();
    
}

function ritaMonster() { 
    ctx.drawImage(monster.bild, monster.x, monster.y);
    monster.y++;
    if (monster.y > 600) {
        monster.y = 0;
        monster.x = Math.ceil(Math.random() * 750);
        
    }

}

function ritaMonster2() { 
    ctx.drawImage(monster2.bild, monster2.x, monster2.y);
    monster2.y++;
    if (monster2.y > 600) {
        monster2.y = 0;
        monster2.x = Math.ceil(Math.random() * 750);
        
    }

}

function ritaMonster3() { 
    ctx.drawImage(monster3.bild, monster3.x, monster3.y);
    monster3.y++;
    if (monster3.y > 600) {
        monster3.y = 0;
        monster3.x = Math.ceil(Math.random() * 750);
        
    }

}

function krock() {
    if ((piga.rad * 50) < monster.y && monster.y < (piga.rad * 50 + 50)) {
        if ((piga.kol * 50) < monster.x && monster.x < (piga.kol * 50 + 50)) {
            ctx.fillStyle = "red";
            ctx.fillText("GAME OVER!", 400, 300);
            gameOver = true;
        
    }

    }

    
}
function krock2() {
    if ((piga.rad * 50) < monster2.y && monster2.y < (piga.rad * 50 + 50)) {
        if ((piga.kol * 50) < monster2.x && monster2.x < (piga.kol * 50 + 50)) {
            ctx.fillStyle = "red";
            ctx.fillText("GAME OVER!", 400, 300);
            gameOver = true;
        
    }

    }

    
}
function krock3() {
    if ((piga.rad * 50) < monster3.y && monster3.y < (piga.rad * 50 + 50)) {
        if ((piga.kol * 50) < monster3.x && monster3.x < (piga.kol * 50 + 50)) {
            ctx.fillStyle = "red";
            ctx.fillText("GAME OVER!", 400, 300);
            gameOver = true;
        
    }

    }

    
}

function ritaKarta() {
    for (let rad = 0; rad < karta.length; rad++) {
        for (let kol = 0; kol < karta[rad].length; kol++) {
            if (karta[rad][kol] != 0) {
                var rest = karta[rad][kol] % 10;
                var rutaPos;
                if (rest == 0) {
                    rutaPos = 10 * 32 - 32;
                    
                } else {
                    rutaPos = rest * 32 - 32;
                }
                
                var rutaPosRad = Math.ceil(karta[rad][kol] / 10) * 32 - 32;
                ctx.drawImage(tileSheet, rutaPos, rutaPosRad, 32, 32, kol * 50, rad * 50, 50, 50);   
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

            piga.rot = 90 * (Math. PI / 180);
            
        break;
        case "ArrowLeft":
            if (karta[piga.rad][piga.kol - 1] == 0) {
                piga.kol--;
                
            }

            piga.rot = -90 * (Math. PI / 180);
                
        break;
        case "ArrowDown":
            if (karta[piga.rad + 1][piga.kol] == 0) {
                piga.rad++;
                
            }

            piga.rot = Math.PI;
                    
        break;
        case "ArrowUp":
            if (karta[piga.rad - 1][piga.kol] == 0) {
                piga.rad--;
                
            }

            piga.rot = 0;
                        
        break;
    }
    
})

function gameLoop() {

    ctx.clearRect(0, 0, eCanvas.width, eCanvas.height);
    ritaKarta();
    ritaMonster();
    ritaMonster2();
    ritaMonster3();

    ritaPiga();
    krock();
    krock2();
    krock3();

    if (!gameOver) {
        requestAnimationFrame(gameLoop);
    }

    
}

gameLoop();