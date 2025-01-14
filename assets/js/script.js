// Funkcija za učitavanje pitanja sa servera
function loadQuestions() {
    fetch('getQuestions.php')
        .then(response => response.json())
        .then(data => {
            questions = data; // Sada pitanja dolaze iz baze podataka
            loadQuestion();
        })
        .catch(error => console.error('Error loading questions:', error));
}

// Funkcija za login
document.getElementById("loginForm")?.addEventListener("submit", function (event) {
    event.preventDefault();
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    fetch('login.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ username, password })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            window.location.href = "quiz.html";
        } else {
            alert(data.message);
        }
    });
});
