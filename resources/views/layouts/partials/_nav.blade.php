<div class="container-fluid navbar-fixed-top" style="background-color: rgb(235, 172, 41);height: 50px; position: relative; padding-left: 40%; ">
  <div style="color: white; position: absolute; top: 50%; transform: translateY(-50%); ">
     votre solde est:1250000
  </div>
</div>
<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link {{active(route('home'))}}" href="{{route('home')}}">Acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{active(route('ins.create'))}}" href="{{route('ins.create')}}">Entrées <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{active(route('outs.index'))}}" href="{{route('outs.index')}}">Sorties</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">stopper</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Consultations</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Archive</a>
              <a class="dropdown-item" href="#">Sorties</a>
              <a class="dropdown-item" href="#">Entrées</a>
            </div>
          </li>
        </ul>
        
      </div>
    </nav>
    