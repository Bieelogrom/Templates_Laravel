@extends ("templates.navbar")
@section('content')

<section class="d-flex align-items-center" style="height: 65vh;">


    <div class="container rounded w-25 formularioContato p-3">
        <form class="">
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label fonteFormulario fw-bold fs-5 ">Nome de vilão</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text text-light fs-8 fonteNavBar">Vilões de verdade não compartilham suas senhas!</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fonteFormulario fw-bold fs-5">Depoimento</label>
                <textarea name="" id="" cols="30" rows="10" class="form-control" id="exampleInputPassword1"></textarea>
            </div>
            <button type="submit" class="btn btn-danger">MACACAR</button>
        </form>
    </div>


</section>

@endsection