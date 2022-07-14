let bootstrapModal;
export function mountEditModalHTML(post) {

  const modalTemplate = document.createElement("span");
  modalTemplate.innerHTML = `
      <div class="modal fade show" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modalCreatePost">
        <div class="modal-content">
          <div class="modal-header headerCreatePost">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Fechar"
            ></button>
          </div>
          <div class="modal-body">
            <label class="postTitle">Insira o título da sua postagem:</label>
            <input class="form-control formTitle" type="text" aria-label="título da postagem">
            <label class="createPostContent mt-4">Insira o conteúdo da sua postagem:</label>
            <textarea class="form-control formContent" id="createPostContent" rows="5"></textarea>
            <label class="tags mt-4">Tags:</label>
            <input class="form-control formTags" type="text" placeholder="Insira aqui as tags separagas por vírgulas">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">Postagem Anônima
            </label>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-concluir btn-primary">
              Concluir
            </button>
          </div>
        </div>
      </div>
    </div>
  `;
  const modalEdit = modalTemplate.children.item(0);
  const title = modalEdit.querySelector(".formTitle");
  title.value = post.title;

  const content = modalEdit.querySelector(".formContent");
  content.textContent = post.description;

  const tags = modalEdit.querySelector(".formTags");
  tags.value = post.id;

  document.body.appendChild(modalEdit);
  bootstrapModal = new bootstrap.Modal(modalEdit);

  bootstrapModal.show();
}