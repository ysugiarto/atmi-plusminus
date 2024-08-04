<div class="card card-primary card-outline">
    <div class="card-body box-profile">
        @if (isset($person))
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="{{ $person->imgPath() }}"
                    alt="User profile picture">
            </div>

            <h3 class="profile-username text-center">{{ $person->nama_lengkap }}</h3>

            <p class="text-muted text-center">{{ $person->email_organisasi }}</p>

            <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                </li>
                <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                </li>
                <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                </li>
            </ul>

            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
        @else
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Profil Tidak Ditemukan</h6>
                </div>
                <div class="card-body">
                    <p>Profil Anda saat ini tidak dapat kami temukan dalam database. Anda tetap bisa mengakses portal
                        intranet menggunakan credentials yang Anda miliki.</p>
                    <p class="mb-0">Mohon hubungi administrator untuk melengkapi profil Anda.</p>
                </div>
            </div>
        @endif
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
