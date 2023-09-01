@extends ("templates.navbar")
@section('content')


<section>
    <div class="d-flex justify-content-around align-items-center" >
    <div class="card" style="width: 18rem;">
        <img src="{{('assets/imgs/azul.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title fonteCardGaleria">Lindinha</h5>
            <p class="card-text fonteGaleria">A inocente e bobinha. Ela tem cabelos loiros e usa um vestido azul. Ela é a mais fraca das três, mas também a mais doce e gentil. </p>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="{{('assets/imgs/verde.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title fonteCardGaleria">Docinho</h5>
            <p class="card-text fonteGaleria">A durona e rebelde. Ela tem cabelos pretos e usa um vestido verde. Ela é a mais brava das três, mas também a mais impulsiva e imprudente.</p>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="{{('assets/imgs/vermelha.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title fonteCardGaleria">Florzinha</h5>
            <p class="card-text fonteGaleria">A líder mandona e metida a esperta. Ela tem cabelos ruivos e usa um vestido rosa. Ela é a mais forte das três, mas também a mais arrogante e teimosa.</p>
        </div>
    </div>
    </div>


</section>




@endsection