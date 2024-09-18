document.addEventListener("DOMContentLoaded", function() {
    const sounds = [
        { id: "sound1", src: "deurbel.mp3", label: "deurrbel" },
        { id: "sound2", src: "ding.mp3", label: "ding" },
        { id: "sound3", src: "error.mp3", label: "error" },
        { id: "sound4", src: "fail.mp3", label: "fail" },
        { id: "sound5", src: "jump.mp3", label: "jump" },
        { id: "sound6", src: "victory.mp3", label: "victory" },
    ];

    const buttonsContainer = document.getElementById('buttons');

    sounds.forEach(sound => {
        const button = document.createElement('button');
        button.className = 'button';
        button.textContent = sound.label;
        button.addEventListener('click', () => {
            const audio = new Audio(sound.src);
            audio.play();
        });
        buttonsContainer.appendChild(button);
    });
});