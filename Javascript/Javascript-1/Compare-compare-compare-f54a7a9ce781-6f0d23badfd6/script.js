const args = process.argv.slice(2);

const inwonersNL = parseInt(args[0], 10);
const inwonersDE = parseInt(args[1], 10);
const inwonersFR = parseInt(args[2], 10);

const check1 = inwonersNL < inwonersDE && inwonersNL < inwonersFR;
const check2 = inwonersNL > inwonersDE || inwonersFR > inwonersDE;
const check3 = inwonersNL <= inwonersDE;

console.log('Nederland heeft minder inwoners dan Duitsland én Frankrijk:', check1);
console.log('Nederland óf Frankrijk heeft meer inwoners dan Duitsland:', check2);
console.log('Nederland heeft niet meer inwoners dan Duitsland:', check3);

const hypothetischNL = 100;
const check4 = hypothetischNL < inwonersDE && hypothetischNL < inwonersFR;
console.log('Met 100 miljoen inwoners zou Nederland minder inwoners hebben dan Duitsland én Frankrijk:', check4);
