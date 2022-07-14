import { generateModal } from "./modal-template.js";
import {disciplinas} from "./disciplinas.js"

let bootstrapModal;

function createModalBtn(disciplina, container) {
  if (!bootstrapModal) {
    const modalTemplate = document.createElement("span");
    modalTemplate.innerHTML = generateModal(disciplina.targetModal);
    const btnDisciplina = modalTemplate.querySelector(".btnDisciplina");
    btnDisciplina.textContent = disciplina.disciplina;

    const disciplinaName = modalTemplate.querySelector(".disciplinaTitle");
    disciplinaName.textContent = disciplina.disciplina;

    const professorName = modalTemplate.querySelector(".disciplinaTeacher");
    professorName.textContent = disciplina.professor;
    container.appendChild(modalTemplate);
  }
}
const app = document.getElementById("containerModal");
const container = document.createElement("div");
container.setAttribute("class", "container d-flex flex-wrap align-items-start justify-content-sm-evenly px-5 mw-100 py-3");

disciplinas.forEach((disciplina) => {
  createModalBtn(disciplina, container);
});
app.appendChild(container);
