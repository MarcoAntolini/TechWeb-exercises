function Computer(processor, disk, ram) {
  this.processor = processor;
  this.disk = disk;
  this.ram = ram;
}

Computer.prototype.infoComputerConsole = function () {
  console.log(
    "Processor: " +
      this.processor +
      "\nDisck: " +
      this.disk +
      "\nRAM: " +
      this.ram
  );
};

Computer.prototype.infoComputerDOM = function (id) {
  document.getElementById(id).innerHTML = `
    <p>Processor: ${this.processor}</p>
    <p>Disk: ${this.disk}</p>
    <p>RAM: ${this.ram}</p>`;
};

const myPc = new Computer("Intel Core i7", "1TB", "16GB");
myPc.infoComputerConsole();
myPc.infoComputerDOM("miopc");
