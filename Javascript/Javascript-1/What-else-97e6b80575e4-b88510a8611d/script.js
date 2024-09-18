const args = process.argv.slice(2);
const city = args[0];

if (city === 'Amsterdam') {
    console.log(`${city} is de hoofdstad van Nederland`);
} else {
    console.log(`${city} is niet de hoofdstad van Nederland`);
}