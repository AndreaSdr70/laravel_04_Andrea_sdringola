<x-layout>
    <div class="container-fluid vh-100 bg-background">
        <div class="row h-75 justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-center dislpay-4 title">
                    Dettagli del Docente: {{$teacher['name']}}{{$teacher['surname']}}
                </h1>
            </div>
        </div>
        <div class="row justify-content-center align-items center">
              <div class="col-12 col-md-6">
                    <img src="https://picsum.photos/400" alt="">
              </div>
              <div class="col-12 col-md-6">
                    <h2>Materie insegnate:</h2>
                    <p>{{$teacher['subject']}}</p>
              </div>
        </div>
    </div>
    </x-layout>