import {mountReportModalHTML} from "./reportModal.js";
import {mountEditModalHTML} from "./editModal.js";
import {mountDeleteModalHTML} from "./deleteModal.js";
import {mountCommentsModalHTML} from "./commentsModal.js";

function mountPost(post, container) {
  const movie = post;
  const postTemplate = document.createElement("span");
  postTemplate.innerHTML = `
  <div class="row content py-2 my-3">
    <div class="col-2 me-3">
      <p class="author">
      </p>
    </div>
    <div class="col position-relative">
      <h3 class="title">
      </h3>
      <div class="btn-group dropend position-absolute end-0 top-0">
        <button
          type="button"
          class="btn "
          data-bs-toggle="dropdown"
          aria-expanded="false"
        >
          <i class="fa-solid fa-ellipsis-vertical fa-lg"></i>
        </button>
        <ul class="dropdown-menu">
        </ul>
      </div>
      <p class="postContent">
      </p>
    </div>
  </div>;
  `;
  const card = postTemplate.children.item(0);
  card.querySelector(".author").textContent = movie.director;
  card.querySelector(".title").textContent = movie.title;
  card.querySelector(".postContent").textContent = movie.description;

  const listItemEdit = document.createElement("li");
  const btnEdit = document.createElement("button");
  btnEdit.setAttribute("class", "dropdown-item");
  btnEdit.setAttribute("type", "button");
  btnEdit.textContent = "Editar";
  btnEdit.addEventListener("click", (event) => {
    event.preventDefault();
    mountEditModalHTML(post);
  });

  const listItemDelete = document.createElement("li");
  const btnDelete = document.createElement("button");
  btnDelete.setAttribute("class", "dropdown-item");
  btnDelete.setAttribute("type", "button");
  btnDelete.textContent = "Excluir";
  btnDelete.addEventListener("click", (event) => {
    event.preventDefault();
    mountDeleteModalHTML();
  });

  const listItemReport = document.createElement("li");
  const btnReport = document.createElement("button");
  btnReport.setAttribute("class", "dropdown-item");
  btnReport.setAttribute("type", "button");
  btnReport.textContent = "Denunciar";
  btnReport.addEventListener("click", (event) => {
    event.preventDefault();
    mountReportModalHTML();
  });
  const kebabMenu = card.querySelector(".dropdown-menu");

  if (movie.director == "Hayao Miyazaki") {
    listItemEdit.appendChild(btnEdit);
    listItemDelete.appendChild(btnDelete);
    kebabMenu.appendChild(listItemEdit);
    kebabMenu.appendChild(listItemDelete);
  } else {
    listItemReport.appendChild(btnReport);
    kebabMenu.appendChild(listItemReport);
  }

  const commentSection = document.createElement("div");
  commentSection.setAttribute("class", "comentarios py-4 px-3 mb-5");
  const commentSectionName = document.createElement("button");
  commentSectionName.setAttribute("class", "mb-0 btnComments");
  commentSectionName.setAttribute("data-bs-target", "#"+post.id);
  commentSectionName.textContent = "Comentários (0)";
  commentSectionName.addEventListener("click", (event) => {
    event.preventDefault();
    mountCommentsModalHTML(post);
  });
  commentSection.appendChild(commentSectionName);
  
  container.appendChild(card);
  container.appendChild(commentSection);
}

const app = document.getElementById("postagens");

const container = document.createElement("div");
container.setAttribute("class", "container px-0");
app.appendChild(container);

fetch("https://ghibliapi.herokuapp.com/films")
  .then((response) => response.json())
  .then((posts) => posts.forEach((post) => mountPost(post, container)))
  .catch((err) => {
    const errorMessage = document.createElement("p");
    errorMessage.textContent = `Essa não! Não está funcionando!`;
    app.appendChild(errorMessage);
  });
