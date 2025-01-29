document.addEventListener("DOMContentLoaded", () => {

    const dialogues = window.dialogues || [];

    const dialogueBox = document.querySelector(".dialogue-box > #dialogue");
    const narratorBox = document.querySelector(".narrator-box");
    const narratorName = document.querySelector(".narrator-box > h1");
    const choiceBox = document.querySelector(".choice-box");
    const livesCount = document.querySelector("#lives-count");
    const nextChapterForm = document.querySelector(".next-chapter");

    let currentDialogueIndex = 0;
    let lives = 5;
    let isTyping = false;

    function typeWriterEffect(text, callback) {
        const speed = 50;
        let index = 0;
        isTyping = true;
        dialogueBox.textContent = "";

        function type() {
            if (index < text.length) {
                dialogueBox.textContent += text.charAt(index);
                index++;
                setTimeout(type, speed);
            } else {
                isTyping = false;
                if (callback) callback();
            }
        }

        type();
    }

    function updateUI() {
        if (currentDialogueIndex >= dialogues.length) return;

        const currentDialogue = dialogues[currentDialogueIndex];

        if (currentDialogue.narrator) {
            narratorBox.classList.remove("no-narrator-box");
            narratorName.textContent = currentDialogue.narrator;
        } else {
            narratorBox.classList.add("no-narrator-box");
        }

        if (currentDialogue.choices) {
            choiceBox.classList.remove("no-choice");
            choiceBox.innerHTML = "";

            currentDialogue.choices.forEach((choice, index) => {
                const choiceDiv = document.createElement("div");
                choiceDiv.classList.add("choice");
                choiceDiv.innerHTML = `<p>${choice.text}</p>`;
                choiceDiv.addEventListener("click", () => handleChoice(index));
                choiceBox.appendChild(choiceDiv);
            });
        } else {
            choiceBox.classList.add("no-choice");
        }

        if (currentDialogueIndex == dialogues.length - 1) {
            nextChapterForm.style.display = "block";
        } else {
            nextChapterForm.style.display = "none";
        }

        typeWriterEffect(currentDialogue.text);
    }

    function handleChoice(choiceIndex) {
        const currentDialogue = dialogues[currentDialogueIndex];
        const selectedChoice = currentDialogue.choices[choiceIndex];

        if (selectedChoice.isCorrect) {
            currentDialogueIndex++;
        } else {
            lives--;
            livesCount.textContent = lives;

            if (lives == 0) {
                alert("Game over! Restarting...");
                currentDialogueIndex = 0;
                lives = 5;
                livesCount.textContent = lives;
            }
        }

        updateUI();
    }

    function proceedToNextDialogue() {
        if (!isTyping && !dialogues[currentDialogueIndex].choices) {
            currentDialogueIndex++;
            if (currentDialogueIndex < dialogues.length) {
                updateUI();
            }
        }
    }

    document.querySelector(".dialogue-box").addEventListener("click", proceedToNextDialogue);

    updateUI();
});
