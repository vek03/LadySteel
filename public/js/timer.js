function startTimer(duration, display, image) {

    var timer = duration, minutes, seconds;

    var intervalId = setInterval(function() {

        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            clearInterval(intervalId); // Para o timer
            display.style.display = "none"; // Esconde o contador de tempo
            image.style.display = "block"; // Exibe a imagem
        }

    }, 1000);

}