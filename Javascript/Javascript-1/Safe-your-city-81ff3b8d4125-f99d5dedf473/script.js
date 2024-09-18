const args = process.argv.slice(2);
const enteredPin = args[0];
const userRole = args[1];
const dayOfWeek = parseInt(args[2]);

const correctPin = "123752";
const allowedRoles = ["bestuur", "administratief medewerker"];
const weekendDays = [5, 6];
const isWeekend = (day) => weekendDays.includes(day);

const canOpenSafe = (pin, role) => pin === correctPin && allowedRoles.includes(role);

const logAccessAttempt = (pin, role, day) => {
    console.log(`Poging tot toegang met pincode: ${pin}, rol: ${role}, dag van de week: ${day}`);
};

if (canOpenSafe(enteredPin, userRole)) {
    console.log("Toegang verleend");
} else if (!isWeekend(dayOfWeek)) {
    console.log("Verkeerde pincode of je hebt niet de juiste rechten");
    logAccessAttempt(enteredPin, userRole, dayOfWeek);
} else if (isWeekend(dayOfWeek)) {
    console.log("Veiligheidsdiensten worden ingeschakeld");
    logAccessAttempt(enteredPin, userRole, dayOfWeek);
} else {
    console.log("Onbekende fout");
}