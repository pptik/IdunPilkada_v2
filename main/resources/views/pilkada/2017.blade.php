@extends('layouts.app')

@section('content')
    <div class="row blue " style="padding: 3em 0 3em 0 ; background: #ffeff1; color: #a94442">
        <div class="container">
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="container" >


                    <button class="btn btn-info" style="width: 100%; background: white;color: red;border-color: red" data-toggle="collapse" data-target="#provinsi">Provinsi</button>
                    <div id="provinsi" class="text-center collapse" >
                        <br>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Aceh</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Bangka Belitung</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">DKI Jakarta</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Banten</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Gorontalo</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Sulawesi Barat</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Papua Barat</a>
                        <br>
                    </div>
                    <br>
                    <button class="btn btn-info" style="width: 100%; background: white;color: red;border-color: red" data-toggle="collapse" data-target="#Kabupaten">Kabupaten</button>
                    <div id="Kabupaten" class="text-center collapse" >
                        <br>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Mesuji</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Lampung Barat</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Tulang Bawang</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Bekasi</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Banjarnegara</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Batang</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Jepara</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Pati</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Cilacap</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Brebes</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Kulonprogo</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Buleleng</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Flores Timur</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Lembata</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Landak</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Barito Selatan</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Kotawaringin Barat</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Hulu Sungai Utara</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Barito Kuala</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Banggai Kepulauan</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Buol</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Bolaang Mongondow</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Kepulauan Sangihe</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Takalar</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Bombana</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Kolaka Utara</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Buton</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Boalemo</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Muna Barat</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Buton Tengah</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Buton Selatan</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Seram Bagian Barat</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Buru</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Maluku Tenggara Barat</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Maluku Tengah</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Pulau Morotai</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Halmahera Tengah</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Nduga</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Lanny Jaya</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Sarmi</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Mappi</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Tolikara</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Kepulauan Yapen</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Jayapura</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button"> Intan Jaya</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Puncak Jaya</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Dogiyai</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Tambrauw</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Maybrat</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Sorong</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Aceh Besar</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Aceh Utara</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Aceh Timur</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Aceh Jaya</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Bener Meriah</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Pidie</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Simeulue</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Aceh Singkil</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Aceh Barat Daya</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Aceh Tenggara</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Gayo Lues</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button"> Aceh Barat</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Nagan Raya</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Aceh Tengah</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Aceh Tamiang</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Tapanuli Tengah</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Kepulauan Mentawai</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Kampar</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Muaro Jambi</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Sarolangun</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Tebo</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Musi Banyuasin</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Bengkulu Tengah</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Tulang Bawang Barat</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Pringsewu</a>

                        <br>
                    </div>
                    <br>
                    <button class="btn btn-info" style="width: 100%; background: white;color: red;border-color: red" data-toggle="collapse" data-target="#kota">Kota</button>
                    <div id="kota" class="text-center collapse" >
                        <br>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Banda Aceh</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Lhokseumawe</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Langsa</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Sabang</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Tebing Tinggi</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Payakumbuh</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Pekanbaru</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Cimahi</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Tasikmalaya</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Salatiga</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Yogyakarta</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Batu</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Kupang</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Singkawang</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Kendari</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Ambon</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Jayapura</a>
                        <a class="btn btn-info" style="background: #a94442;width: 20%"  href="{{ url('/detailsuara') }} " role="button">Sorong</a>


                        <br>
                    </div>
                </div> <!-- /container -->
            </div>

        </div>
    </div>
@endsection
@section('footer')
    <br/>
    <br/>
    <div class="row text-center panel-footer" style="background: black">

        <div class="col-lg-12 col-md-12 col-sm-12">
            <p class="text-grey">
                Our partners
                <br/>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ url('/') }}//main/resources/assets/images/partners/pptik.png"/>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ url('/') }}//main/resources/assets/images/partners/dsi.png"/>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <img src="{{ url('/') }}//main/resources/assets/images/partners/hivos.png"/>
                </div>
            </div>
            <br/>

            </p>
        </div>
    </div>

@endsection
@section('js')

@endsection
