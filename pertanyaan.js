const pertanyaanSiswa = document.querySelector(".pertanyaan-siswa");
const progress = document.querySelector(".progress-bar");
const optionButtons = document.querySelectorAll(".option-text");
const nextButton = document.querySelector(".selanjutnya");

let currentQuestion = 0;
let data = null;
let choices = [];

// Ambil data pertanyaan dari database
fetchData();

// Fungsi untuk mengambil data pertanyaan dari database
function fetchData() {
  fetch("fetchquestion.php")
    .then(response => response.json())
    .then(result => {
      data = result;
      progress.style.width = `${((currentQuestion + 0) / data.length) * 100}%`;
      displayQuestion(currentQuestion);
    })
    .catch(error => console.error("Gagal mengambil data pertanyaan.", error));
}

function displayQuestion(questionIndex) {
  const question = data[questionIndex];
  if (question) {
    pertanyaanSiswa.querySelector(".title").textContent = question.question;
    optionButtons[0].textContent = question.option_1;
    optionButtons[1].textContent = question.option_2;
    optionButtons[2].textContent = question.option_3;

    for (let i = 0; i < optionButtons.length; i++) {
      optionButtons[i].classList.remove("selected");
    }

    if (choices[questionIndex]) {
      const selectedOptionIndex = Array.from(optionButtons).findIndex(button => button.textContent === choices[questionIndex]);
      if (selectedOptionIndex !== -1) {
        optionButtons[selectedOptionIndex].classList.add("selected");
      }
    }
  } else {
    const result = processResults(data, choices);
    showResults(result);
    saveResultsToDatabase(result); // Save results to database
  }
}

nextButton.addEventListener("click", () => {
  const selectedOption = document.querySelector(".option-text.selected");
  if (selectedOption) {
    choices[currentQuestion] = selectedOption.textContent;
    currentQuestion++;

    if (currentQuestion < data.length) {
      progress.style.width = `${((currentQuestion + 0) / data.length) * 100}%`;
      displayQuestion(currentQuestion);
    } else {
      const result = processResults(data, choices);
      saveResultsToDatabase(result); // Save results to database
      window.location.href = "proses.php"; // Redirect to hasil.php
    }

    if (currentQuestion === data.length - 1) {
      nextButton.textContent = "Selesai";
      nextButton.addEventListener("click", () => {
        const result = processResults(data, choices);
        showResults(result);
        progress.style.width = "0%"; // Reset progress bar to 0
        window.location.href = "proses.php"; // Redirect to hasil.php
      });
    }
  } else {
    alert("Pilih salah satu opsi sebelum melanjutkan.");
  }
});

// Tambahkan fungsi untuk memeriksa apakah ada opsi yang belum terpilih
function checkOptionsSelected() {
  for (let i = 0; i < optionButtons.length; i++) {
    if (optionButtons[i].classList.contains("selected")) {
      return true; // Ada opsi yang sudah terpilih
    }
  }
  return false; // Tidak ada opsi yang terpilih
}

// Perbarui event listener untuk opsi pilihan
for (let i = 0; i < optionButtons.length; i++) {
  optionButtons[i].addEventListener("click", () => {
    for (let j = 0; j < optionButtons.length; j++) {
      optionButtons[j].classList.remove("selected");
    }

    optionButtons[i].classList.add("selected");

    // Perbarui status klik tombol Selanjutnya
    if (checkOptionsSelected()) {
      nextButton.disabled = false; // Aktifkan tombol Selanjutnya
    } else {
      nextButton.disabled = true; // Nonaktifkan tombol Selanjutnya
    }
  });
}


function processResults(data, choices) {
  const result = {};

  for (let i = 0; i < data.length; i++) {
    const userAnswer = choices[i] || "";
    const questionId = data[i].id;

    if (questionId.startsWith("V")) {
      result[questionId] = userAnswer;
    } else if (questionId.startsWith("A")) {
      result[questionId] = userAnswer;
    } else if (questionId.startsWith("K")) {
      result[questionId] = userAnswer;
    }
  }
  return result;
}

function showResults(result) {
  for (const key in result) {
    const userAnswer = result[key];
    console.log(`${key}: ${userAnswer}`);
  }
}

function saveResultsToDatabase(result) {
  fetch("saveanswers.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify(result)
  })
    .then(response => response.json())
    .then(data => {
      console.log("Results saved to database:", data);
    })
    .catch(error => {
      console.error("Failed to save results to database:", error);
    });
}