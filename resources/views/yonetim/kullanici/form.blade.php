@extends ('admin.template')

@section('title', 'kullanıcı Yönetimi')
@section('content')
    <h1 class="page-header">Kullanıcı Yönetimi</h1>


    <form method="post" action="{{route('yonetim.kullanici.kaydet',@$entry->id)}}">
        {{csrf_field()}}

        <div class="pull-right">
            <button type="submit" class="btn btn-primary">{{@$entry->id>0? "Güncelle": "Ekle"}}</button>
        </div>
        <h2 class="sub-header">Kullanıcı {{@$entry->id >0 ? "Düzenle" : "Ekle"}}</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="adsoyad">Ad Soyad </label>
                    <input type="text" class="form-control" id="adsoyad" placeholder="Ad Soyad">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email </label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="sifre">Password</label>
                    <input type="password" class="form-control" id="sifre" placeholder="Şifre">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="adres">Address</label>
                    <input type="text" class="form-control" id="adres" placeholder="Adres">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="telefon">Telefon</label>
                    <input type="text" class="form-control" id="telefon" placeholder="Telefon">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="ceptelefonu">Cep Telefonu</label>
                    <input type="text" class="form-control" id="ceptelefonu" placeholder="Cep Telefonu">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="aktif_mi" value="1"> Aktif Mi
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="yonetici_mi" value="1"> Aktif Mi
            </label>
        </div>

    </form>



@endsection


