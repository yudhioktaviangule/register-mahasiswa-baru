<div class="container-fluid">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-info-umum-tab" data-toggle="pill" href="#pills-info-umum" role="tab" aria-controls="pills-info-umum" aria-selected="true">Informasi Umum</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Informasi Kontak</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-orang-tua-tab" data-toggle="pill" href="#pills-orang-tua" role="tab" aria-controls="pills-orang-tua" aria-selected="false">Informasi Orang Tua</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-asal-sekolah-tab" data-toggle="pill" href="#pills-asal-sekolah" role="tab" aria-controls="pills-asal-sekolah" aria-selected="false">Informasi Asal Sekolah</a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-info-umum" role="tabpanel" aria-labelledby="pills-info-umum-tab">
        @include("pages.pendaftar.contents.umum")
    </div>
    <div class="tab-pane fade" id="pills-orang-tua" role="tabpanel" aria-labelledby="pills-orang-tua-tab">...</div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
    <div class="tab-pane fade" id="pills-asal-sekolah" role="tabpanel" aria-labelledby="pills-asal-sekolah-tab">...</div>
    </div>
</div>