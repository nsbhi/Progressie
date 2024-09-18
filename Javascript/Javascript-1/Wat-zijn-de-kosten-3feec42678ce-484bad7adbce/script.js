let args = process.argv.slice(2);

if (args.length !== 4) {
    console.log('Gebruik: node script.js <Administratie> <Infrastructuur> <Evenementen> <Totaal>');
} else {
    let administratie = parseInt(args[0]);
    let infrastructuur = parseInt(args[1]);
    let evenementen = parseInt(args[2]);
    let totaal = parseInt(args[3]);

    let totaalAI = administratie + infrastructuur;
    let overigeKosten = totaal - (administratie + infrastructuur + evenementen);
    let percentageAdministratie = (administratie / totaal) * 100;

    console.log(`aan administratie en infrastructuur is ${totaalAI} miljoen uitgegeven`);
    console.log(`de overige kosten zijn ${overigeKosten} miljoen`);
    console.log(`administratie was goed voor  ${percentageAdministratie}% van de uitgaven`);
}