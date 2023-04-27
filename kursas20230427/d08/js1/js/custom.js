/*console.log("Pavyko")

var - kintamasis
let - kintamasis - NAUDOTI
const - kintamasis - NAUDOTI


var vardas = 'Andrius'
vardas = 'Martynas'
console.log(vardas)

let  vardas = 'Andrius'
vardas = 'Martynas'
console.log(vardas)

const vardas = 'Andrius'
vardas = 'Martynas'
console.log(vardas)


let num = 6 + 4
let vsc = 'Labas'
let sum = num + vsc
console.log(num + ' ' + vsc)

let relationship = (vsc == num)
console.log(typeof(relationship))


let vardas = 'Dainius'
let pavarde = 'Frišmantas'
console.log(vardas + " " + pavarde)
console.log(`Mano vardas yra ${vardas}, o pavardė yra ${pavarde}`)


let tekstas = 'Pirmas'
console.log(tekstas.length)
console.log(tekstas.toUpperCase())
console.log(tekstas.toLowerCase())
console.log(tekstas.charAt(5))
console.log(tekstas.indexOf('s'))

tekstas ='Cia gali buti Jusu reklama!'
console.log(tekstas.replace('gali buti','yra'))
console.log(tekstas.substring(4,14))
console.log(tekstas.substr(4,9))

let x = 6.99
console.log(Math.round(x))
console.log(Math.ceil(x))
console.log(Math.floor(x))

let y = 5.8
let z = '5.8'
console.log(Math.max(x,y,z))
console.log(Math.min(x,y,z))

let i = Math.random()*50
console.log(Math.round(i))

let a = Math.floor(Math.random()*(26-16+1)+16)//skaicius nuo 16 iki 26 (max-min+1)+min
console.log(a)

if(y==z){
    console.log('lygus skaiciai')
} else{
    console.log('nelygus skaiciai')
}

if(y===z){
    console.log('lygus skaiciai')
} else{
    console.log('nelygus skaiciai')
}
T && T = True
T && F = False
F && T = False
F && F = False

T || T = True
T || F = True
F || T = True
F || F = False
*/
let num1 = 1
while (num1 <=10){
    console.log(num1)
    num1++
}

for(let c=1; c <=10; c++){
    console.log(c)
}

let suma = 0
for(let b=1; b<=10;b++){
suma+=b
}
console.log(suma)

let s = 0
let skaiciai = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100]

for(let i = 0; i<skaiciai.length;i++){
    s+=skaiciai[i]
}
console.log(s)