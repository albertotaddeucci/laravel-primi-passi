<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff</title>

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="/">USA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link"  href="/">Home</a>
          <a class="nav-link active" aria-current="page" href="{{route('partite')}}">Staff</a>
          <a class="nav-link" href="{{route('partite')}}">Partite</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">


    <h1 class="text-center mt-5">Dream team '92</h1>
    <div class="ro">
      <div class="col-auto">
        <h2 class="py-4">
          In panchina sedevano:
        </h2>
        @foreach($members as $member)
          <ul>
            <li>
              {{$member}}
              
            </li>
            
          </ul>
        @endforeach
        <p class="pt-3"> 
          La scelta della USA Basketball per l'allenatore della rappresentativa statunitense era caduta su Chuck Daly: il futuro Hall of Fame aveva appena lasciato (nell'estate del 1992) i Detroit Pistons per i New Jersey Nets: nei 9 anni a Detroit era arrivato tre volte consecutive alle Finals vincendo due titoli. Pur non avendo esperienza pluridecennale nella lega Daly aveva portato i Pistons ad altissimi livelli: i Bad Boys avevano stupito l'NBA con il loro gioco fisico e aggressivo, riuscendo a scalfire il dominio di Celtics e Lakers e, trascinati da Dumars e Isiah Thomas, avevano ottenuto il repeat (1989/1990). Daly aveva una lunga striscia di stagioni dal bilancio positivo, che lo avevano portato a essere considerato tra i migliori coach in circolazione; inoltre, dopo Pat Riley, era l'allenatore in attività con più anelli conquistati (a pari merito con K.C. Jones).
          Come assistenti Daly poté contare su un altro coach NBA, l'espertissimo coach Hall-of-Fame Wilkens, e su due ottimi allenatori a livello di college come Carlesimo e Krzyzewski (Hall-of-Fame con esperienze con la nazionale USA).
        </p>
      </div>
    </div>
    
  </div>

</body>
    
