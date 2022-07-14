let bootstrapModal;
export function mountDeleteModalHTML(){
  const modalTemplate = document.createElement("span");
  modalTemplate.innerHTML = `
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Excluir</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h4>Tem certeza de que deseja excluir esse post?</h4>
            <p>Após a exclusão o post não poderá ser recuperado.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Excluir</button>
          </div>
        </div>
      </div>
    </div>
  `
  const modalDelete = modalTemplate.children.item(0);

  document.body.appendChild(modalDelete);
  bootstrapModal = new bootstrap.Modal(modalDelete);

  bootstrapModal.show();
}