<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>Extensions</title>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@tabler/core@1.1.1/dist/css/tabler.min.css" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <!-- WRAPPER IN CUI C'ERA LA CARD -->
  <div class="search-wrapper mb-3">
    <div class="bg-gray-800 text-white p-3 d-flex align-items-center justify-content-between" id="top-bar">
      <!-- Sezione sinistra: Logo + Titolo -->
      <div class="d-flex align-items-center">
        <img id="logo"
          src="./assets/images/logo.svg"
          alt="Logo"
          class="me-3" />
      </div>

      <!-- Sezione destra: bottone per cambio tema -->
      <button class="btn btn-icon btn-dark text-white" id="btn-dark-mode" title="Toggle Theme">
        <!-- Icona (rimane invariata, puoi personalizzarla se vuoi) -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="icon"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          stroke-width="2"
          stroke="currentColor"
          fill="none"
          stroke-linecap="round"
          stroke-linejoin="round">
          <path d="M0 0h24v24H0z" stroke="none"></path>
          <circle cx="12" cy="12" r="4"></circle>
          <path d="M12 3v1m0 16v1m8-8h1M3 12H2m15.364-5.364l-.707.707M8.05 16.95l-.707.707m9.9 0l.707.707m-9.9-9.9l.707.707"></path>
        </svg>
      </button>
    </div>
  </div>

  <!-- Il resto del codice rimane invariato -->
  <article class="container mb-3">
    <div class="d-flex align-items-center justify-content-between">
      <h1 class="mb-3" id="title">Extensions List</h1>
      <div class="btn-list justify-content-end me-3">
        <button class="btn btn-pill btn-danger">All</button>
        <button class="btn btn-pill btn-secondary">Active</button>
        <button class="btn btn-pill btn-secondary">Inactive</button>
      </div>
    </div>

    <section class="section-extension mt-3">
      <div class="row row-cards">
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="card card-sm bg-dark text-white">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <img src="./assets/images/logo-devlens.svg" alt="logo-devlens">
                <div>
                  <h3 class="card-title ms-3">DevLens</h3>
                  <p class="mt-1 ms-3">
                    Quickly inspect page layouts and visualize element boundaries.
                  </p>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <button class="btn btn-pill btn-dark me-auto">Remove</button>
              <label class="form-check  form-switch m-0">
                <input class="form-check-input orange-switch" type="checkbox" checked />
              </label>
            </div>
          </div>
        </div>
        <!-- Aggiungi altre card simili qui, se necessario -->
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="card card-sm bg-dark text-white">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <img src="./assets/images/logo-style-spy.svg" alt="logo-devlens">
                <div>
                  <h3 class="card-title ms-3">StyleSpy</h3>
                  <p class="mt-1 ms-3">
                    Quickly inspect page layouts and visualize element boundaries.
                  </p>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <button class="btn btn-pill btn-dark me-auto">Remove</button>
              <label class="form-check  form-switch m-0">
                <input class="form-check-input orange-switch" type="checkbox" checked />
              </label>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="card card-sm bg-dark text-white">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <img src="./assets/images/logo-speed-boost.svg" alt="logo-devlens">
                <div>
                  <h3 class="card-title ms-3">SpeedBoost</h3>
                  <p class="mt-1 ms-3">
                    Quickly inspect page layouts and visualize element boundaries.
                  </p>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <button class="btn btn-pill btn-dark me-auto">Remove</button>
              <label class="form-check  form-switch m-0">
                <input class="form-check-input orange-switch" type="checkbox" checked />
              </label>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="card card-sm bg-dark text-white">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <img src="./assets/images/logo-json-wizard.svg" alt="logo-devlens">
                <div>
                  <h3 class="card-title ms-3">JSONWizard</h3>
                  <p class="mt-1 ms-3">
                    Quickly inspect page layouts and visualize element boundaries.
                  </p>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <button class="btn btn-pill btn-dark me-auto">Remove</button>
              <label class="form-check  form-switch m-0">
                <input class="form-check-input orange-switch" type="checkbox" checked />
              </label>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="card card-sm bg-dark text-white">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <img src="./assets/images/logo-tab-master-pro.svg" alt="logo-devlens">
                <div>
                  <h3 class="card-title ms-3">TabMasterPro</h3>
                  <p class="mt-1 ms-3">
                    Quickly inspect page layouts and visualize element boundaries.
                  </p>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <button class="btn btn-pill btn-dark me-auto">Remove</button>
              <label class="form-check  form-switch m-0">
                <input class="form-check-input orange-switch" type="checkbox" checked />
              </label>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="card card-sm bg-dark text-white">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <img src="./assets/images/logo-viewport-buddy.svg" alt="logo-devlens">
                <div>
                  <h3 class="card-title ms-3">Viweport</h3>
                  <p class="mt-1 ms-3">
                    Quickly inspect page layouts and visualize element boundaries.
                  </p>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <button class="btn btn-pill btn-dark me-auto">Remove</button>
              <label class="form-check  form-switch m-0">
                <input class="form-check-input orange-switch" type="checkbox" checked />
              </label>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="card card-sm bg-dark text-white">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <img src="./assets/images/logo-markup-notes.svg" alt="logo-devlens">
                <div>
                  <h3 class="card-title ms-3">MarkUp Notes</h3>
                  <p class="mt-1 ms-3">
                    Quickly inspect page layouts and visualize element boundaries.
                  </p>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <button class="btn btn-pill btn-dark me-auto">Remove</button>
              <label class="form-check  form-switch m-0">
                <input class="form-check-input orange-switch" type="checkbox" checked />
              </label>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="card card-sm bg-dark text-white">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <img src="./assets/images/logo-grid-guides.svg" alt="logo-devlens">
                <div>
                  <h3 class="card-title ms-3">GridGuides</h3>
                  <p class="mt-1 ms-3">
                    Quickly inspect page layouts and visualize element boundaries.
                  </p>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <button class="btn btn-pill btn-dark me-auto">Remove</button>
              <label class="form-check  form-switch m-0">
                <input class="form-check-input orange-switch" type="checkbox" checked />
              </label>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="card card-sm bg-dark text-white">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <img src="./assets/images/logo-palette-picker.svg" alt="logo-devlens">
                <div>
                  <h3 class="card-title ms-3">Palette picker</h3>
                  <p class="mt-1 ms-3">
                    Quickly inspect page layouts and visualize element boundaries.
                  </p>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <button class="btn btn-pill btn-dark me-auto">Remove</button>
              <label class="form-check  form-switch m-0">
                <input class="form-check-input orange-switch" type="checkbox" checked />
              </label>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="card card-sm bg-dark text-white">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <img src="./assets/images/logo-link-checker.svg" alt="logo-devlens">
                <div>
                  <h3 class="card-title ms-3">LinkCheker</h3>
                  <p class="mt-1 ms-3">
                    Quickly inspect page layouts and visualize element boundaries.
                  </p>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <button class="btn btn-pill btn-dark me-auto">Remove</button>
              <label class="form-check  form-switch m-0">
                <input class="form-check-input orange-switch" type="checkbox" checked />
              </label>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="card card-sm bg-dark text-white">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <img src="./assets/images/logo-dom-snapshot.svg" alt="logo-devlens">
                <div>
                  <h3 class="card-title ms-3">DOM Snapshot</h3>
                  <p class="mt-1 ms-3">
                    Quickly inspect page layouts and visualize element boundaries.
                  </p>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <button class="btn btn-pill btn-dark me-auto">Remove</button>
              <label class="form-check  form-switch m-0">
                <input class="form-check-input orange-switch" type="checkbox" checked />
              </label>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="card card-sm bg-dark text-white">
            <div class="card-body">
              <div class="d-flex align-items-center mb-3">
                <img src="./assets/images/logo-console-plus.svg" alt="logo-devlens">
                <div>
                  <h3 class="card-title ms-3">ConsolePlus</h3>
                  <p class="mt-1 ms-3">
                    Quickly inspect page layouts and visualize element boundaries.
                  </p>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <button class="btn btn-pill btn-dark me-auto">Remove</button>
              <label class="form-check  form-switch m-0">
                <input class="form-check-input orange-switch" type="checkbox" checked />
              </label>
            </div>
          </div>
        </div>
      </div>
    </section>
  </article>

  <script
    src="https://cdn.jsdelivr.net/npm/@tabler/core@1.1.1/dist/js/tabler.min.js"></script>
  <script src="script.js"></script>
</body>

</html>
