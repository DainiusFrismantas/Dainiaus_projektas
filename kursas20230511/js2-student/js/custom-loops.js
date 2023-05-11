/* LENGVESNI */

/* 01.
Sukurkite ciklą kuris atspausdintų 10 kartų žodį “labas”.
*/
for (let i = 0; i < 10; i++) {
    console.log("labas");
  }

/* 02.
Sukurkite ciklą kuris atspausdintų skaičius nuo 0 iki 9.
*/
console.log('--------------------------------Atskirti-------------------------')
for (
    let i = 0; 
    i < 10;
    i++
    ) 
    {console.log(i);}
/* 03.
Sukurkite masyvą su dešimt augalų pavadinimų.
*/
console.log('--------------------------------Atskirti-------------------------')
let augalu_masyvas = ['gluosnis', 'beržas', 'liepa', 'maumedis', 'eglė', 'ąžuolas', 'pušis','kakavmedis', 'drebulė','klevas']
console.log(augalu_masyvas)
/* 04.
Atspausdinkite kiekvieną 3-čio uždavinio augalą atskiroje eilutėje.
*/
console.log('--------------------------------Atskirti-------------------------')
for (let i = 0; i < augalu_masyvas.length; i++) {
    console.log(augalu_masyvas[i]);
                                                    //* console.log("\n"); // atskiria kiekvieną objektą nauja eilute*//
  }
/* 05.
Atspausdinkite 3-čio uždavinio kiekvieną augalą pradedant nuo paskutinio, ir baigiant pirmuoju. (atvirkščias ciklas).
*/
console.log('--------------------------------Atskirti-------------------------')
augalu_masyvas.reverse(); // apverčia masyvą

for (var i = 0; i < augalu_masyvas.length; i++) {
  console.log(augalu_masyvas[i]);
}
/* 06.
Atspausdinkite kas antrą skaičių nuo 10 iki 50 (porinius);
*/
console.log('--------------------------------Atskirti-------------------------')
for (let i = 10; i <= 50; i += 2) {
    console.log(i);
  }
/* 07.
Atspausdinkite kas antrą skaičių nuo 10 iki 50. (porinius) Jei skaičius dalinasi iš 10 be liekanos jo nespausdinkite. ( naudokite continue.) (atspausdinti visus porinius skaičius, išskyrus tuos kurie dalinasi iš 10 be liekanos)
*/
console.log('--------------------------------Atskirti-------------------------')
for (let i = 10; i <= 50; i += 2) {
    if (i % 10 === 0) {
      continue;
    }
    console.log(i);
  }
/* 08.
Sukurkite ciklą kuris suktųsi nuo 0 iki 20. Suskaičiuokite, kiek kartų kintamasis i turėjo porinę reikšmę;
*/
console.log('--------------------------------Atskirti-------------------------')
let count = 0;

for (let i = 0; i <= 20; i++) {
  if (i % 2 === 0) {
    count++;
  }
}

console.log("Porinės reikšmės kartojasi: " + count + " kartus.");
/* 09.
Suskaičiuokite kiek 3-čio uždavinio masyve yra žodžių trumpesnių nei 5 simboliai, ir kiek ilgesnių nei 7 simboliai.
*/
console.log('--------------------------------Atskirti-------------------------')
let trumpesni = 0;
let ilgesni = 0;

for (let i = 0; i < augalu_masyvas.length; i++) {
  if (augalu_masyvas[i].length < 5) {
    trumpesni++;
  } else if (augalu_masyvas[i].length > 7) {
    ilgesni++;
  }
}

console.log("Trumpesni nei 5 simboliai: " + trumpesni);
console.log("Ilgesni nei 7 simboliai: " + ilgesni);
/* SUNKESNI */
console.log('--------------------------------Atskirti-------------------------')
/* 01.
Sugeneruokite 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti atspausdinti skliausteliuose” [ ] “.
*/
var didesniUz150 = 0;

for (var i = 0; i < 300; i++) {
  var skaicius = Math.floor(Math.random() * 301); // sugeneruoja atsitiktinį skaičių nuo 0 iki 300
  if (skaicius > 275) {
    console.log("[" + skaicius + "] ");
  } else {
    console.log(skaicius + " ");
  }
  if (skaicius > 150) {
    didesniUz150++;
  }
}

console.log("\nDidesnių už 150: " + didesniUz150);


console.log('--------------------------------Atskirti-------------------------')
/* 02.
Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki 3000, kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti.
*/
console.log('--------------------------------Atskirti-------------------------')
var dalijasiIs77 = "";

for (var i = 1; i <= 3000; i++) {
  if (i % 77 === 0) {
    if (dalijasiIs77 === "") {
      dalijasiIs77 += i;
    } else {
      dalijasiIs77 += ", " + i;
    }
  }
}

console.log(dalijasiIs77);
/* 03.
Nupieškite kvadratą iš “*”, kurio kraštines sudaro 10 “*”.
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
*/
console.log('--------------------------------Atskirti-------------------------')
for (let i = 0; i < 7; i++) {
    let row = '';
    for (let j = 0; j < 10; j++) {
      row += '* ';
    }
    console.log(row);
  }