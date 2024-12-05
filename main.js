


const form = document.querySelector("form");
const notesList = document.querySelector(".notes-list");

function dumbass(tit, not) {
  const title = tit;
  const note = not;

  if (!title || !note) {
    alert("please enter both title and note");
    return;
  }
  if (document.getElementById("no-item")) {
    document.getElementById("no-item").remove();
  }

  const date = new Date();
  const dateSering = `${
    date.getMonth() + 1
  }/${date.getDate()}/${date.getFullYear()} ${date.getHours()}:${date.getMinutes()}`;
  console.log(dateSering);

  const newNote = document.createElement("div");
  newNote.classList.add("note");
  newNote.innerHTML = `<span class="date">${dateSering}</span>
  <h2>${title}</h2>
  <p>${note}</p>
  <button onclick="deleteNote(event)">Delete</button>`;

  notesList.insertBefore(newNote, notesList.firstChild);
}

form.addEventListener("submit", (event) => {
  event.preventDefault();
  const title = form.title.value;
  const note = form.note.value;

  if (!title || !note) {
    alert("please enter both title and note");
    return;
  }
  if (document.getElementById("no-item")) {
    document.getElementById("no-item").remove();
  }

  const date = new Date();
  const dateSering = `${
    date.getMonth() + 1
  }/${date.getDate()}/${date.getFullYear()} ${date.getHours()}:${date.getMinutes()}`;
  console.log(dateSering);

  const newNote = document.createElement("div");
  newNote.classList.add("note");
  newNote.innerHTML = `<span class="date">${dateSering}</span>
  <h2>${title}</h2>
  <p>${note}</p>
  <button onclick="deleteNote(event)">Delete</button>`;

  notesList.insertBefore(newNote, notesList.firstChild);
  form.reset();
});

function deleteNote(event) {
  event.target.parentElement.remove();
  if (notesList.childElementCount === 0) {
    const noItem = document.createElement("span");
    noItem.id = "no-item";
    noItem.textContent = "no-items. . .";
    notesList.appendChild(noItem);
  }
}