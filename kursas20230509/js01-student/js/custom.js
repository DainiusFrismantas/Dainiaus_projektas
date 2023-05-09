/**alert("Dėmesio")
confirm("Ar sutinkate?")
prompt("Koks Jūsų vardas?")*/

/**
let turimVarda = false;

while (turimVarda == false) {
    let userVardas = prompt("Koks tavo vardas?");

    if(userVardas) 
        {if(confirm(`Ar tikrai tavo vardas ${userVardas}?`)) {alert(`Labas, ${userVardas}!`);
            turimVarda = true;
        } 
        else{alert("Bandyk dar kart.");
        }
    }else{alert("Bandyk dar kart.");}
}

.pop() - ištrina paskutinę index reikšmę masyve (panaikina index)
.push() - prideda paskutinę index reikšmę masyve
*/