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
let x = Math.random()*4
let y = Math.random()*4

if (x > y){
    console.log((Math.round(x/y*100)/100))
} else {
    console.log((Math.round(y/x*100)/100))
}
console.log(x)
console.log(y)

/* 03.
Naudokite funkciją Math.random(). Sukurkite tris kintamuosius ir naudodamiesi funkcija Math.random() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.
*/
let ax = Math.random()*25
let ay = Math.random()*25
let az = Math.random()*25
console.log("testas" + " " + ax)
console.log("testas" + " " + ay)
console.log("testas" + " " + az)

if (ax > ay > az){
    console.log(ax)
} else if (ay > ax > az){
    console.log(ay)
} else {
    console.log(az)
}
/* 04.
Įvedami skaičiai - kr1, kr2, kr3 – kraštinių ilgiai, trys kintamieji (naudokite ​Math.random()​ funkcija nuo 1 iki 10). Parašykite JavaScript programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 
*/



/* 05.
Sukurkite keturis kintamuosius ir ​Math.random()​ funkcija sugeneruokite jiems reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų.
*/



/* 06.
Naudokite funkcija Math.random(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti  laužtiniuose skliaustuose [], 0 -  (), didesni už 0 {}.
*/
Math.floor(Math.random() * 21) - 10;

TIK IF naudoti

/* 07.
Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​Math.random()​ funkcija nuo 5 iki 3000.
*/



/* 08.
Naudokite funkciją Math.random(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Tada aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.
*/



/* 09.
Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją Math.random(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.
*/
let valandos = Math.random()*24
let minutes = Math.random()*60
let sekundes = Math.random()*60
let skaicius = Math.random()*300
let pridejimas = sekundes + skaicius
console.log(`${valandos} ${minutes} ${sekundes} ${skaicius}`)
console.log(`${valandos} ${minutes} ${pridejimas}`)
/* 10.
Naudokite funkciją Math.random(). Sugeneruokite 6 kintamuosius su atsitiktinėm reikšmėm nuo 1000 iki 9999. Atspausdinkite reikšmes viename string'e, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas tarpais. Naudoti ciklų ir masyvų NEGALIMA.
*/

let x1 = Math.random()*(9999-1000+1)+1000
let x2 = Math.random()*(9999-1000+1)+1000
let x3 = Math.random()*(9999-1000+1)+1000
let x4 = Math.random()*(9999-1000+1)+1000
let x5 = Math.random()*(9999-1000+1)+1000
let x6 = Math.random()*(9999-1000+1)+1000
let stringas = 
console.log(`${x1} ${x2} ${x3} ${x4} ${x5} ${x6}`)