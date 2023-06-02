@extends('layouts.admin.app')
@section ('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Credits</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Credits</h2>
      <p class="section-lead">Tri Guna Bhakti</p>
      <div class="card">
        <div class="card-body">
          <div class="list-unstyled list-unstyled-border mt-4">
            <div class="media">
              <div class="media-icon"><i class="far fa-circle"></i></div>
              <div class="media-body">
                <h6><a href="{{ route('dashboard.index') }}" target="_blank">Tri Guna Bhakti</a></h6>
              </div>
            </div>

            <div class="media">
              <div class="media-icon"><i class="far fa-circle"></i></div>
              <div class="media-body">
                <h6>Team Leader</a></h6>
                <p>- <a href="https://github.com/hamedayani114" target="_blank">Irham Hamed Ayani</a></p>
              </div>
            </div>

            <div class="media">
              <div class="media-icon"><i class="far fa-circle"></i></div>
              <div class="media-body">
                <h6>Collaborator</a></h6>
                <p>
                  - <a href="#" target="_blank">Chendy Tri Wardhani</a><br>
                  - <a href="#" target="_blank">M. Rafi Saputra</a><br>
                  - <a href="https://github.com/hamedayani114" target="_blank">Irham Hamed Ayani</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection