<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    .background-scene {
        position: relative;
        background-image: url('{{ asset('images/chapter-covers/prologue.jpg') }}');
        background-size: cover;
        background-position: center;
        height: 100%;
        object-fit: cover;
        background-repeat: no-repeat;
    }

    .narrator-box {
        margin: 0 auto;
        width: 100%;
        height: 5rem;
        background: radial-gradient(ellipse at 50% 120%, rgba(0,0,0,0.616185516672036) 0%, rgba(0,0,0,0.5440205682184278) 37%, rgba(0,0,0,0.32752572285760306) 53%, rgba(255,255,255,0) 70%);
        background-position: center;
        position: absolute;
        bottom: 10.5rem;
        left: 50%;
        transform: translateX(-50%);
    }

    .narrator-box > h1 {
        color: white;
        font-size: 2rem;
        text-align: center;
        margin: 2.2rem 0 0 0;
        font-weight:100
    }

    .no-narrator-box {
        margin: 0 auto;
        width: 100%;
        height: 2.5rem;
        background: radial-gradient(ellipse at 50% 120%, rgba(0,0,0,0.616185516672036) 0%, rgba(0,0,0,0.5440205682184278) 27%, rgba(0,0,0,0.32752572285760306) 44%, rgba(255,255,255,0) 70%);
        background-position: center;
        position: absolute;
        bottom: 10.5rem;
        left: 50%;
        transform: translateX(-50%);
    }

    .no-narrator-box > h1 {
        display: none;
    }

    .dialogue-box {
        margin: 0 auto;
        width: 100%;
        height: 13rem;
        background: radial-gradient(ellipse at 50% 10%, rgba(0, 0, 0, 0.656) 0%, rgba(0, 0, 0, 0.59) 37%, rgba(0, 0, 0, 0.399) 53%, rgba(255, 255, 255, 0) 70%);
        background-position: center;
        position: absolute;
        bottom: -2.5rem;
        left: 50%;
        transform: translateX(-50%);
    }

    .dialogue-box::before {
        content: '';
        position: absolute;
        top: 0.2rem;
        left: 50%;
        transform: translateX(-50%);
        width: 40%;
        height: 2px;
        border-radius: 100%;
        background-color: rgb(195, 148, 29);
    }

    .dialogue-box > p{
        display: block;
        color: white;
        font-size: 1.2rem;
        text-align: center;
        margin: 0rem auto;
        letter-spacing: 0.04rem;
        line-height: 1.8rem;
        white-space: pre-line;
    }

    .dialogue-box > p:nth-child(1) {
        margin: 1rem 0 0 0;
    }

    .loader {
        height: 1.3rem;
        position: absolute;
        bottom: 0.4rem;
        left: 50%;
        transform: translateX(-50%);
        filter: hue-rotate(20deg) saturate(1) brightness(10);
    }

    .choice-box {
        display: flex;
        flex-direction: column;
        height: auto;
        width: 20rem;
        position: absolute;
        left: 66.5%;
        bottom: 11rem;
    }

    .no-choice {
        display: none;
    }

    .choice {
        background: linear-gradient(to right, rgba(0, 0, 0, 0.662), transparent);
        margin: 0.3rem;
        border: 0.05rem solid white;
        border-right: none;
        border-radius: 50rem 200% 200% 50rem;
        cursor: pointer;
    }

    .choice > p {
        font-size: 1.2rem;
        color: white;
        letter-spacing: 0.04rem;
        padding: 0.62rem 1rem;
        margin: 0;
    }

    .lives {
        position: absolute;
        top: 2.5rem;
        right: 5rem;
        display: flex;
        align-items: center;
        gap: 0.4rem;
        color: white;
        font-size: 1.5rem;

    }

    .lives > img {
        height: 3.5rem;
        margin: 0 1rem;
    }

    .next-chapter {
        position: absolute;
        bottom: 3rem;
        right: 8rem;
    }

    .next-chapter > button {
        width: 11.6rem; /* Adjust the button size */
        height: 3rem; /* Adjust the button size */
        background-image: url('{{ asset('images/chapters/next-chapter.png') }}');
        background-size: cover; /* Makes sure the image covers the entire button */
        background-position: center;
        border: none;
        cursor: pointer;
        text-indent: -9999px; /* Hides the text */
    }

    .return-button {
        height: 4.5rem;
        width: auto;
        margin: 1rem 1.2rem;
        border-radius: 50%;
        aspect-ratio: 1/1;
        cursor: pointer;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        position: absolute;
        left: 1rem;
        top: 1rem;
    }
</style>
<body id="game">
    <div class="background-scene" id="background">
        <a href="{{ route('chapters.index') }}">
            <img class="return-button" src="{{ asset('images/chapter-covers/return.png') }}" alt="Return">
        </a>
        <div class="lives">
            <img src="{{ asset('images/chapters/heart.png') }}" alt="Lives"> x <span id="lives-count">5</span>
        </div>
        <div class="narrator-box no-narrator-box">
            <h1>Francisco Baltazar</h1>
        </div>
        <div class="dialogue-box">
            <p id="dialogue">Salamat sa iyo, O nanasang irog,
            kung halagahan mo itong aking pagod,
            ang tula ma'y bukal ng bait na kapos,
            pakikinabangan ng ibig tumarok.
            </p>
        </div>
        <img class="loader" src="{{ asset('images/chapters/loader.gif') }}" alt="">
        <div class="choice-box no-choice" id="choices">
            <div class="choice">
                <p>Choice 1</p>
            </div>
            <div class="choice">
                <p>Choice 2</p>
            </div>
            <div class="choice">
                <p>Choice 3</p>
            </div>
            <div class="choice">
                <p>Choice 4</p>
            </div>
        </div>
        <form class="next-chapter" method="POST" action="{{ route('chapters.create', $chapter) }}">
            @csrf
            <button type="submit">I</button>
        </form>
    </div>
    {{-- Last scene/stanza --}}

<script>
    document.addEventListener("DOMContentLoaded", () => {
    const dialogues = [
        {
            text: "Salamat sa iyo, O nanasang irog,\nkung halagahan mo itong aking pagod,\nang tula ma'y bukal ng bait na kapos,\npakikinabangan ng ibig tumarok.",
            narrator: "Francisco Baltazar",
            choices: null
        },
        {
            text: "Ano ang iyong gagawin?",
            narrator: null,
            choices: [
                { text: "Tama ang sagot", isCorrect: true },
                { text: "Mali ang sagot", isCorrect: false },
                { text: "Isa pang maling sagot", isCorrect: false },
                { text: "Maling sagot ulit", isCorrect: false }
            ]
        },
        {
            text: "Tama! Ipagpatuloy mo ang iyong paglalakbay.",
            narrator: "Francisco Baltazar",
            choices: null
        }
        // Add more dialogues as needed.
    ];

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
        const speed = 50; // Typing speed in milliseconds
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
        const currentDialogue = dialogues[currentDialogueIndex];

        // Update narrator box
        if (currentDialogue.narrator) {
            narratorBox.classList.remove("no-narrator-box");
            narratorName.textContent = currentDialogue.narrator;
        } else {
            narratorBox.classList.add("no-narrator-box");
        }

        // Update choices
        if (currentDialogue.choices) {
            choiceBox.classList.remove("no-choice");
            choiceBox.innerHTML = ""; // Clear old choices

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

        // Show or hide the next chapter form
        if (currentDialogueIndex == dialogues.length - 1) {
            nextChapterForm.style.display = "block";
        } else {
            nextChapterForm.style.display = "none";
        }

        // Start typewriter effect for dialogue text
        typeWriterEffect(currentDialogue.text);
    }

    function handleChoice(choiceIndex) {
        const currentDialogue = dialogues[currentDialogueIndex];
        const selectedChoice = currentDialogue.choices[choiceIndex];

        if (selectedChoice.isCorrect) {
            // Move to the next dialogue
            currentDialogueIndex++;
        } else {
            // Reduce lives and restart if necessary
            lives--;
            livesCount.textContent = lives;

            if (lives === 0) {
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

    // Add event listener to dialogue box for toggling
    document.querySelector(".dialogue-box").addEventListener("click", proceedToNextDialogue);

    // Initialize the UI
    updateUI();
});
</script>
</body>
</html>
