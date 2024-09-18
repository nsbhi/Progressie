let args = process.argv.slice(2);

if (args.length !== 1) {
    console.log('Gebruik: node script.js <totaal_kosten>');
} else {
    let totaleKosten = parseInt(args[0]);

    console.log(`in totaal is er ${totaleKosten} miljoen uitgegeven`);

    let gemeenteBetaalt = Math.floor(totaleKosten / 3) * 3;
    let stadBetaalt = totaleKosten % 3;

    console.log(`de stad betaalt ${stadBetaalt} miljoen`);

    console.log(`de gemeente betaalt ${gemeenteBetaalt} miljoen`);
}