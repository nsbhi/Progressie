const args = process.argv.slice(2);
const bevolking = parseInt(args[0]);

if (bevolking > 10000) {
    console.log("Megastad");
} else if (bevolking > 25) {
    console.log("Stad");
} else {
    console.log("Dorp");
}