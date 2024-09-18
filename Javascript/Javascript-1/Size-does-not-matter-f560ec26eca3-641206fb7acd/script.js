const args = process.argv.slice(2);

const inwonersNL = parseInt(args[0], 10);
const inwonersDE = parseInt(args[1], 10);

console.log('inwonersNL < inwonersDE:', inwonersNL < inwonersDE);
console.log('inwonersNL > inwonersDE:', inwonersNL > inwonersDE);