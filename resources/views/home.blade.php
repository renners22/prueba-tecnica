@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-6 content-one">


            <div id="characters" >

            </div>


            <div class="row justify-content-center min-cards">
                <div class="col-md-4">
                    <div class="min-card">
                        <i class="fa fa-grav" aria-hidden="true"></i><span>Apps</span>
                    </div>
                    <div class="min-card">
                        <i class="fa fa-black-tie" aria-hidden="true"></i><span>StoreFronts</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="min-card">
                        <i class="fa fa-picture-o" aria-hidden="true"></i><span>Themes</span>
                    </div>
                    <div class="min-card">
                        <i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Marketplaces</span>
                    </div>
                </div>
            </div>
       </div>

       <div class="col-md-6">
            <img src="{{asset('/img/rickandmorty.jpg')}}" class="img-fluid" alt="">
       </div>

    </div>

    <div class="row content-two">
        <div class="col-md-6 present-left">
            <div class="contenedor">

                <div class="text-cont-two">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, numquam?</h3>
                </div>
                <div class="relleno">
                    <h4>Lorem, ipsum.</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium debitis non ipsam et illo maiores, exercitationem perferendis expedita explicabo facere hic ullam in, adipisci aliquam culpa vero autem saepe? Sed?</p>
                </div>
                <div class="relleno">
                    <h4>Lorem, ipsum dolor.</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus inventore, quis magnam assumenda nisi, doloribus rerum unde tempore nam iure mollitia eaque, maiores dicta beatae!</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 present-right">
            <div class="content-right">

            <div class="d-flex d-md-flex justify-content-md-end fondo-right">
                <div class="icon money">
                    <i class="fa fa-money fa-2x" aria-hidden="true"></i> 
                </div>
                
                <div class="min-text">
                        <h4>Lorem, ipsum dolor.</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit corrupti molestias corporis temporibus quam. </p>
                </div>
            </div> 

            <div class="d-flex d-md-flex justify-content-md-end fondo-right">
                <div class="icon heart">
                    <i class="fa fa-heart fa-2x" aria-hidden="true"></i>
                </div>
                
                <div class="min-text">
                        <h4>Lorem, ipsum dolor.</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit corrupti molestias corporis temporibus quam. </p>
                </div>
            </div>   

            <div class="d-flex d-md-flex justify-content-md-end fondo-right">
                <div class="icon puzzle">
                    <i class="fa fa-puzzle-piece fa-2x" aria-hidden="true"></i>
                </div>
                
                <div class="min-text">
                        <h4>Lorem, ipsum dolor.</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit corrupti molestias corporis temporibus quam. </p>
                </div>

            </div>  
            </div>

        </div>
    </div>

    
</div>
<script>

    const div = document.getElementById("characters");

    fetch('https://rickandmortyapi.com/api/character')
    .then((response) => response.json())
    .then((data) => renderCharacters(data.results));

    function renderCharacters(characters) {
        characters.forEach(ch => {
            // div.innerHTML += `<img src="${ch.image}">`;
            div.innerHTML += `<h2>${ch.name}</h2>`;
            // div.innerHTML += `<span>${ch.status}</span>`
                console.log(ch);
        });
    }
    
</script>
@endsection
