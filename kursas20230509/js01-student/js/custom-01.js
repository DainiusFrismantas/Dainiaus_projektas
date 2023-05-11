/*
Uždavinių sprendimui nenaudoti, masyvų, ciklų ir savo parašytų funkcijų. JavaScript funkcijas žinoma naudokite (pageidautina).
Visi random generuojami skaičiai turi būti sveikieji.
*/

/* 01.
Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(-ų)".
*/
let vardas = 'Dainius'
let pavarde = 'Frišmantas'
let gimimo_metai = 1996
let metai = new Date().getFullYear()
console.log('Dainius')
console.log(`Aš esu ${vardas} ${pavarde}. Man yra ${metai - gimimo_metai} metai(-ų)`)


/* 02.
Naudokite funkciją Math.random(). Sukurkite du kintamuosius ir naudodamiesi funkcija Math.random() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.
*/
console.log('---------------------------------------ATSKIRTI-----------------------------')
let a = Math.floor(Math.random() * 5);  // atsitiktinis skaičius nuo 0 iki 4
let b = Math.floor(Math.random() * 5);  // atsitiktinis skaičius nuo 0 iki 4
let max = Math.max(a, b);
let min = Math.min(a, b);
let result = max / min;
console.log(result.toFixed(2));  // suapvalintas rezultatas iki 2 skaičių po kablelio


/* 03.
Naudokite funkciją Math.random(). Sukurkite tris kintamuosius ir naudodamiesi funkcija Math.random() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.

Operatorius || vadinamas "arba" operatoriumi. Jis naudojamas sąlygose, kad galėtume nustatyti, ar bent viena sąlyga yra teisinga (true). Jei viena iš sąlygų yra teisinga, grąžinama true, o jei abu neteisingi - grąžinama false.
Operatorius && yra loginis operatorius, kuris grąžina true, jei abu jo pateikti operandai yra true, ir grąžina false kitu atveju.
*/
console.log('---------------------------------------ATSKIRTI-----------------------------')
let a1 = Math.floor(Math.random() * 26);
let b1 = Math.floor(Math.random() * 26);
let c1 = Math.floor(Math.random() * 26);

let middle;

if (a1 < b1 && b1 < c1 || c1 < b1 && b1 < a1) {
  middle = b;
} else if (b1 < a1 && a1 < c1 || c1 < a1 && a1 < b1) {
  middle = a1;
} else {
  middle = c1;
}

console.log("Vidurine reiksme yra:", middle);
/* 04.
Įvedami skaičiai - kr1, kr2, kr3 – kraštinių ilgiai, trys kintamieji (naudokite ​Math.random()​ funkcija nuo 1 iki 10). Parašykite JavaScript programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 
*/
console.log('---------------------------------------ATSKIRTI-----------------------------')
kr1 = 6
kr2 = 6
kr3 = 11

if (kr1 < kr2 + kr3 && kr2 < kr1 + kr3 && kr3 < kr1 + kr2) {
    console.log("Galima sudaryti trikampį");
  } else {
    console.log("Negalima sudaryti trikampio");
  }

/* 05.
Sukurkite keturis kintamuosius ir ​Math.random()​ funkcija sugeneruokite jiems reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų.
*/
console.log('---------------------------------------ATSKIRTI-----------------------------')
let a2 = Math.floor(Math.random() * 3);
let b2 = Math.floor(Math.random() * 3);
let c2 = Math.floor(Math.random() * 3);
let d2 = Math.floor(Math.random() * 3);
console.log(a2, b2, c2, d2)
let nuliai = 0;
let vienetai = 0;
let dvejetai = 0;

if (a2 === 0) {
  nuliai++;
} else if (a2 === 1) {
  vienetai++;
} else {
  dvejetai++;
}

if (b2 === 0) {
  nuliai++;
} else if (b2 === 1) {
  vienetai++;
} else {
  dvejetai++;
}

if (c2 === 0) {
  nuliai++;
} else if (c2 === 1) {
  vienetai++;
} else {
  dvejetai++;
}

if (d2 === 0) {
  nuliai++;
} else if (d2 === 1) {
  vienetai++;
} else {
  dvejetai++;
}

console.log("Nulių kiekis:", nuliai);
console.log("Vienetų kiekis:", vienetai);
console.log("Dvejetų kiekis:", dvejetai);

/* 06.
Naudokite funkcija Math.random(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti  laužtiniuose skliaustuose [], 0 -  (), didesni už 0 {}.
TIK IF naudoti*/
console.log('---------------------------------------ATSKIRTI-----------------------------')
const num1 = Math.floor(Math.random() * 21) - 10; // skaičius nuo -10 iki 10
const num2 = Math.floor(Math.random() * 21) - 10; // skaičius nuo -10 iki 10
const num3 = Math.floor(Math.random() * 21) - 10; // skaičius nuo -10 iki 10

// patikriname skaičių ženklus ir atspausdiname pagal reikalavimą
if (num1 < 0) 
{
console.log(`[${num1}]`);
} 
else if (num1 === 0) 
{
console.log(`(${num1})`);
} 
else 
{
console.log(`{${num1}}`);
}

if (num2 < 0) {
console.log(`[${num2}]`);
} else if (num2 === 0) {
console.log(`(${num2})`);
} else {
console.log(`{${num2}}`);
}

if (num3 < 0) {
console.log(`[${num3}]`);
} else if (num3 === 0) {
console.log(`(${num3})`);
} else {
console.log(`{${num3}}`);
}


/* 07.
Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​Math.random()​ funkcija nuo 5 iki 3000.
*/
console.log('---------------------------------------ATSKIRTI-----------------------------')
let kiekis = Math.floor(Math.random() * 2996) + 5;
let kaina = kiekis;

if (kaina >= 2000) {
  kaina = kaina * 0.96;
} else if (kaina >= 1000) {
  kaina = kaina * 0.97;
}

console.log(`Perkama ${kiekis} žvakės už ${kaina.toFixed(2)} EUR.`);

/* 08.
Naudokite funkciją Math.random(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Tada aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.
*/
console.log('---------------------------------------ATSKIRTI-----------------------------')
let a3 = Math.floor(Math.random() * 101);
let b3 = Math.floor(Math.random() * 101);
let c3 = Math.floor(Math.random() * 101);

let sum = a3 + b3 + c3;
let count = 3;

let avg1 = Math.round(sum / count);

if (a3 < 10 || a3 > 90) {
  sum -= a3;
  count--;
}
if (b3 < 10 || b3 > 90) {
  sum -= b3;
  count--;
}
if (c3 < 10 || c3 > 90) {
  sum -= c3;
  count--;
}

let avg2 = Math.round(sum / count);

console.log(`Aritmetinis vidurkis: ${avg1}`);
console.log(`Vidurkis be reikšmių < 10 arba > 90: ${avg2}`);

/* 09.
Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją Math.random(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.
*/
console.log('---------------------------------------ATSKIRTI-----------------------------')
let valandos = Math.random()*24
let minutes = Math.random()*60
let sekundes = Math.random()*60
let skaicius = Math.random()*300
// Sugeneruojame papildomas sekundes
let papildomosSekundes = Math.floor(Math.random() * 300);

// Sujungiame laiką su papildomomis sekundėmis ir priskiriame naujam laikui
let laikas = new Date();
laikas.setHours(valandos, minutes, sekundes);
laikas.setSeconds(laikas.getSeconds() + papildomosSekundes);

// Atspausdiname pradinį laiką
console.log(`Pradinis laikas: ${valandos}:${minutes}:${sekundes}`);

// Atspausdiname pridėtų sekundžių skaičių
console.log(`Pridėtos sekundės: ${papildomosSekundes}`);

// Atspausdiname naują laiką
console.log(`Naujas laikas: ${laikas.getHours()}:${laikas.getMinutes()}:${laikas.getSeconds()}`);
/* 10.
Naudokite funkciją Math.random(). Sugeneruokite 6 kintamuosius su atsitiktinėm reikšmėm nuo 1000 iki 9999. Atspausdinkite reikšmes viename string'e, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas tarpais. Naudoti ciklų ir masyvų NEGALIMA.
*/
console.log('---------------------------------------ATSKIRTI-----------------------------')
let x1 = Math.random()*(9999-1000+1)+1000
let x2 = Math.random()*(9999-1000+1)+1000
let x3 = Math.random()*(9999-1000+1)+1000
let x4 = Math.random()*(9999-1000+1)+1000
let x5 = Math.random()*(9999-1000+1)+1000
let x6 = Math.random()*(9999-1000+1)+1000
let stringas = 
console.log(`${x1} ${x2} ${x3} ${x4} ${x5} ${x6}`)

console.log('---------------------------------------ATSKIRTI-----------------------------')
// sugeneruojame 6 kintamuosius su atsitiktinėm reikšmėm nuo 1000 iki 9999
// Sugeneruojame 6 kintamuosius su atsitiktinėmis reikšmėmis
let a4 = Math.floor(Math.random() * 9000) + 1000;
let b4 = Math.floor(Math.random() * 9000) + 1000;
let c4 = Math.floor(Math.random() * 9000) + 1000;
let d4 = Math.floor(Math.random() * 9000) + 1000;
let e4 = Math.floor(Math.random() * 9000) + 1000;
let f4 = Math.floor(Math.random() * 9000) + 1000;

// Sudedame reikšmes į string'ą
let numbers = `${a4} ${b4} ${c4} ${d4} ${e4} ${f4}`;

// Išrūšiuojame reikšmes
let sortedNumbers = numbers.split(' ').sort((a4, b4) => b4 - a4);

// Sukuriame naują string'ą su surūšiuotomis reikšmėmis
let sortedString = sortedNumbers.join(' ');

// Atspausdiname string'ą
console.log(sortedString);