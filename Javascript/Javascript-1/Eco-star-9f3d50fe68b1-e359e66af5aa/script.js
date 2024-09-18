function berekenSterren(dieselVerboden, afvalscheiding, natuurgebied) {
    let sterren = 0;

    if (dieselVerboden === 'ja') {
        sterren++;
    }

    if (afvalscheiding === 'ja') {
        sterren++;
    }

    if (parseFloat(natuurgebied) > 25) {
        sterren++;
    }

    return sterren;
}

const args = process.argv.slice(2);

if (args.length < 3) {
    console.log('Gebruik: node script.js <dieselVerboden> <afvalscheiding> <natuurgebied>');
    process.exit(1);
}

const [dieselVerboden, afvalscheiding, natuurgebied] = args;

const sterren = berekenSterren(dieselVerboden, afvalscheiding, natuurgebied);

if (sterren === 3) {
    console.log('Het is een milieuvriendelijke stad.');
} else if (sterren === 0) {
    console.log('De stad moet omgevormd worden.');
} else {
    const sterrenNodig = 3 - sterren;
    console.log(`De stad heeft nog ${sterrenNodig} ster(ren) nodig om milieuvriendelijk te zijn.`);
}