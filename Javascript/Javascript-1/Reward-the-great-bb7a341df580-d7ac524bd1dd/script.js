function bepaalBeloning(rating, natuurPercentage, kmAutowegdek) {
    if (rating >= 3) {
        if (natuurPercentage > 25) {
            return 'Belastingkorting voor de inwoners';
        }
        return 'Subsidie voor aanleg van meer natuur';
    }
    if (kmAutowegdek > 200) {
        return 'Subsidie voor ombouwen autoweg naar fietsstraat';
    }
    return 'Subsidie voor afvalinzameling';
}

const args = process.argv.slice(2);

if (args.length < 3) {
    console.log('Gebruik: node script.js <rating> <natuurPercentage> <kmAutowegdek>');
    process.exit(1);
}

const [rating, natuurPercentage, kmAutowegdek] = args.map(arg => parseInt(arg, 10));

console.log(`Rating: ${rating} sterren`);
console.log(`natuurgebied: ${natuurPercentage}%`);
console.log(`autowegdek: ${kmAutowegdek} km`);

const beloning = bepaalBeloning(rating, natuurPercentage, kmAutowegdek);
console.log(`${beloning}`);