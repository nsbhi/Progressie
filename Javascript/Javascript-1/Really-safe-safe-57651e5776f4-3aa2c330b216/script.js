const args = process.argv.slice(2);

const failedAttempts = parseInt(args[0]);
const enteredPin = args[1];
const userRole = args[2];
const dayOfWeek = parseInt(args[3]);
const currentHour = parseInt(args[4]);

const correctPin = '123752';
const workHoursStart = 9;
const workHoursEnd = 17;
const maxAttempts = 5;

console.log(`Aantal mislukte pogingen: ${failedAttempts}`);
console.log(`Ingevoerde pincode: ${enteredPin}`);
console.log(`Functie: ${userRole}`);
console.log(`Dag van de week: ${dayOfWeek}`);
console.log(`Tijd van de dag: ${currentHour}`);

function isWithinWorkHours(day, hour) {
    return day >= 0 && day <= 4 && hour >= workHoursStart && hour < workHoursEnd;
}

function isRoleBestuur(role) {
    return role === 'bestuur';
}

function isRoleAdmin(role) {
    return role === 'administratief medewerker';
}

if (failedAttempts >= maxAttempts) {
    console.log('Kluis is geblokkeerd voor vandaag.');
} else if (isRoleBestuur(userRole) || (isRoleAdmin(userRole) && isWithinWorkHours(dayOfWeek, currentHour))) {
    if (enteredPin === correctPin) {
        console.log('Kluis opent.');
        if (!isRoleBestuur(userRole)) {
            console.log('Sms naar bestuur: administratief medewerker heeft de kluis geopend.');
        }
    } else {
        console.log('Verkeerde pincode.');
    }
} else if (isWithinWorkHours(dayOfWeek, currentHour)) {
    console.log('Alarm gaat af.');
} else {
    console.log('Stil alarm gaat af.');
}