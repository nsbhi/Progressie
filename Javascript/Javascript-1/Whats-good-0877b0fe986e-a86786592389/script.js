const args = process.argv.slice(2);

const gemiddeldeTemperatuur = parseFloat(args[0]);
const totaleNeerslag = parseFloat(args[1]);
const laagsteTemperatuur = parseFloat(args[2]);

console.log(`Gemiddelde temperatuur: ${gemiddeldeTemperatuur} °c`);
console.log(`Totale neerslag: ${totaleNeerslag} mm`);
console.log(`Laagste temperatuur: ${laagsteTemperatuur} °c`);

const warmdroog = gemiddeldeTemperatuur > 20 && totaleNeerslag < 750;
const koud = laagsteTemperatuur >= 10 || gemiddeldeTemperatuur >= 25;

const isWarmLand = warmdroog || koud;

console.log('Is Nederland een warm land?', isWarmLand);