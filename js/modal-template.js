export const generateModal = (modalId) => {
  return `
    <!-- Button trigger modal -->
    <button type="button" class="btn btnDisciplina" data-bs-target="#${modalId}" data-bs-toggle="modal">
    </button>
    <!-- The Modal 1 -->
    <div class="modal modalDisciplinaId" id="${modalId}">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
            ></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div id="container">
              <div class="row"> 
                <div class="col"> 
                  <h4 class="disciplinaTitle"></h4>
                  <h4 class="disciplinaTeacher">Docente: João Pedro Ribeiro Batista</h4>
                </div>
                <div class="col-4"> 
                  <button
                  type="button"
                  class="btn btn-lg btnAvaliacao"
                  data-bs-toggle="modal"
                  data-bs-target="#myModal2"
                >
                  Avaliar Disciplina/Docente
                </button>
                </div>
              </div>

              <hr>
              <h5 class="dicasEstudo">Dicas de Estudo</h5>

              <img src="../imagens/em-breve.png" class="imgBreve mx-auto d-block" />

              <h3 class="breve d-flex justify-content-center">Em breve!</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- The Modal 2 -->
    <div class="modal" id="myModal2">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <button type="button" class="btn" data-bs-target="#${modalId}" data-bs-toggle="modal">
            <i class="fa-solid fa-lg fa-angle-left"></i> Voltar
            </button>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
            ></button>
          </div>

          <div class="modal-body">
            <!-- Início Modal body -->

            <!-- Início navegação tab -->

            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link active"
                  id="home-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#home"
                  type="button"
                  role="tab"
                  aria-controls="home"
                  aria-selected="true"
                >
                  Avaliar Disciplina
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link"
                  id="profile-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#profile"
                  type="button"
                  role="tab"
                  aria-controls="profile"
                  aria-selected="false"
                >
                  Avaliar Docente
                </button>
              </li>
            </ul>

            <!-- Fim navegação tab -->

            <div class="tab-content" id="myTabContent">
              <!--Início avaliação da disciplina -->
              <div
                class="tab-pane fade show active"
                id="home"
                role="tabpanel"
                aria-labelledby="home-tab"
              >
                <br />

                <p class="pergunta">A disciplina foi apresentada com objetivos claros?</p>

                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    Nunca
                  </label>
                </div>

                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    As vezes
                  </label>
                </div>

                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    Metade do tempo
                  </label>
                </div>

                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    Quase sempre
                  </label>
                </div>

                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    Sempre
                  </label>
                </div>

                <br />

                <p class="pergunta">
                  A distribuição de conteúdo ao longo do curso foi adequada?
                </p>

                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    Nunca
                  </label>
                </div>

                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    As vezes
                  </label>
                </div>

                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    Metade do tempo
                  </label>
                </div>

                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    Quase sempre
                  </label>
                </div>

                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    Sempre
                  </label>
                </div>

                <br /><br />
              </div>
              <!--Fim avaliação da disciplina -->

              <div
                class="tab-pane fade"
                id="profile"
                role="tabpanel"
                aria-labelledby="profile-tab"
              >
                <!--Início avaliação do docente -->

                <br />

                <p class="pergunta">O grau de domínio do professor sobre o conteúdo foi:</p>

                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    Muito baixo
                  </label>
                </div>

                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    Baixo
                  </label>
                </div>

                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    Razoável
                  </label>
                </div>

                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    Alto
                  </label>
                </div>

                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    Muito alto
                  </label>
                </div>

                <br />

                <p class="pergunta">
                  Você faria outra matéria com o mesmo professor ou indicaria
                  ele para outro aluno?
                </p>

                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    Sim
                  </label>
                </div>

                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    Não
                  </label>
                </div>

                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckDefault"
                  />
                  <label class="form-check-label" for="flexCheckDefault">
                    Talvez
                  </label>
                </div>

                <br />

                <!-- Modal footer -->
                <div class="modal-footer d-flex justify-content-center">
                  <button type="button" class="btn btnConcluir">Concluir</button>
                </div>
              </div>
              <!--Fim avaliação do docente -->
            </div>
          </div>
          <!-- Fim Modal body -->
        </div>
      </div>
    </div>
    `;
};
