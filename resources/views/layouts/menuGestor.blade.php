<div class="d-flex">

  @include('layouts.sidebar')

  <div id="dashboard-card" class="p-1">
    <div class="list-group-item">
      <div class="d-flex">
        <div class="mr-auto p-2">
          <h2 class="display-4 titulo">
            Dashboard
          </h2>
        </div>
      </div>

      <div class="row mb-3">
        @if ($user->hasRole(['super-admin']))
        <div class="col-md-3">
          <div class="card m-3 bg-success text-white text-center">
            <div class="card-body">
              <i class="fas fa-users fa-3x mb-2"></i>
              <h6 class="card-title">
                Usuários Atuais
              </h6>
              <h2 class="lead">
                {{ $count_users }}
              </h2>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card m-3 bg-primary text-white text-center">
            <div class="card-body">
              <i class="fas fa-copy fa-3x mb-2"></i>
              <h6 class="card-title">
                Editais Existentes
              </h6>
              <h2 class="lead">
                {{ $count_all_edicts }}
              </h2>
            </div>
          </div>
        </div>
        @endif
        <div class="col-md-3">
          <div class="card m-3 bg-danger text-white text-center">
            <div class="card-body">
              <i class="fas fa-file fa-3x mb-2"></i>
              <h6 class="card-title">
                Meus Editais
              </h6>
              <h2 class="lead">
                {{ $count_edicts }}
              </h2>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card m-3 bg-warning text-white text-center">
            <div class="card-body">
              <i class="fas fa-eye fa-3x mb-2"></i>
              <h6 class="card-title">
                Relatórios
              </h6>
              <h2 class="lead">0</h2>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card m-3 bg-info text-white text-center">
            <div class="card-body">
              <i class="fas fa-comments fa-3x mb-2"></i>
              <h6 class="card-title">
                Avaliações
              </h6>
              <h2 class="lead">0</h2>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>
