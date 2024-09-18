const args = process.argv.slice(2);
const city = args[0];

console.log(`Ingevoerde stad: ${city}`);

if (city === 'Amsterdam') {
    console.log('Het is de hoofdstad van Nederland');
}