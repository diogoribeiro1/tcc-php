
function displayComments(commentsContainer){
  const commentsTemplate = document.createElement("span");
  commentsTemplate.innerHTML = `
    <div class="container">
      <h5 class="authorComment">Irene Gamble</h5>
      <p class="row contentComment">Pellentesque ut ligula porta, malesuada risus sit amet, facilisis leo. Etiam venenatis dapibus nulla mattis pharetra. Ut id mollis nisi. Suspendisse ut ex metus. Aliquam at dignissim dolor, in mollis dui. Nullam elementum vitae purus ut sodales. Vestibulum varius massa ut arcu aliquam, vitae tempus purus porta. Nam bibendum mi purus, sit amet pellentesque nulla consectetur eu. Aenean at orci a massa ultrices consequat.</p>
    </div>
  `;
  const comments = commentsTemplate;
  // const author = comments.querySelector(".authorComment");
  // author.textContent = comment.author;

  // const content = comments.querySelector(".contentComment");
  // content.textContent = comment.comment;
  
  commentsContainer.appendChild(comments);
}

let bootstrapModalComments;
export function mountCommentsModalHTML(post) {
  const id = post.id;
  
  const modalTemplate = document.createElement("span");
  modalTemplate.innerHTML = `
    <div
    class="modal fade show" id="${id}" role="dialog"
    >
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title postTitle title" id="modalComentarios"></h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Fechar"
          ></button>
        </div>
        <div class="modal-body">
          <div class="row content py-2 mx-0 my-3">
            <div class="col-2 me-3">
              <p class="author"></p>
            </div>
            <div class="col position-relative">
              <p class="postContent"></p>
            </div>
          </div>
          <div class="row">
            <div class="col-9 form-floating">
              <textarea
                class="form-control"
                id="floatingTextarea"
                id="message-text"
                rows="3"
              ></textarea>
              <label for="floatingTextarea">Comentário</label>
            </div>
            <div class="col align-self-end w-100 mx-0 px-2">
              <div class="form-check">
                <input
                  class="form-check-input checkboxAnonimo"
                  type="checkbox"
                  value=""
                  id="flexCheckDefault"
                />
                <label class="form-check-label pb-3" for="flexCheckDefault"
                  >Comentário Anônimo
                </label>
                <button type="button" class="btn btn-sm btn-enviar">
                  Enviar comentário
                </button>
              </div>
            </div>
          </div>
          <hr />
          <div class="comments"></div>
        </div>
        <div class="modal-footer">
          <a clas="topoAnchor" href="#modalComentarios">Topo</a>
        </div>
      </div>
    </div>
  </div>
  `;
  const modalComments = modalTemplate.children.item(0);
  const title = modalComments.querySelector(".title");
  title.textContent = post.title;

  const content = modalComments.querySelector(".postContent");
  content.textContent = post.description;

  const author = modalComments.querySelector(".author");
  author.textContent = post.director;
  const commentsContainer = modalComments.querySelector(".comments");
  displayComments(commentsContainer);

  document.body.appendChild(modalComments);
  bootstrapModalComments = new bootstrap.Modal(modalComments);
  
  bootstrapModalComments.show();
}