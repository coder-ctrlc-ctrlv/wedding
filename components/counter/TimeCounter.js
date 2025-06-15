export default class TimeCounter {
    constructor(targetDate) {
        this.targetDate = new Date(targetDate).getTime();
        this.timerInterval = null;
    }

    start(interval = 1000) {
        this.update();
        this.timerInterval = setInterval(() => this.update(), interval);
    }

    update() {
        const now = new Date().getTime();
        const difference = this.targetDate - now;

        if (difference <= 0) {
            this.setDigits("days", "00");
            this.setDigits("hours", "00");
            this.setDigits("minutes", "00");
            this.setDigits("seconds", "00");
            clearInterval(this.timerInterval);
            return;
        }

        const days = Math.floor(difference / (1000 * 60 * 60 * 24));
        const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((difference % (1000 * 60)) / 1000);

        this.setDigits("days", this.padZero(days, 2));
        this.setDigits("hours", this.padZero(hours, 2));
        this.setDigits("minutes", this.padZero(minutes, 2));
        this.setDigits("seconds", this.padZero(seconds, 2));
    }

    setDigits(prefix, value) {
        const digit1 = document.getElementById(`${prefix}1`);
        const digit2 = document.getElementById(`${prefix}2`);

        if (digit1 && digit2) {
            digit1.innerText = value[0];
            digit2.innerText = value[1];
        }
    }

    padZero(num, size) {
        return String(num).padStart(size, '0');
    }
}