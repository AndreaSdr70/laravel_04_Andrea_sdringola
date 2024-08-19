<x-layout>
    <div class="container-fluid vh-100 bg-background">
        <div class="row h-75 justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-center dislpay-4 title">
                    I nostri studenti
                </h1>
            </div>
        </div>
  
        <div class="row justify-content-center align-items center">
              @foreach ($students as $student )
              <div class="col-12 col-md-3 py-5">
                    {{-- !PASSARE I DATI AL COMPONENTE CARD 
                      * sfruttiamo gli ATTRIBUTI HTML, custom
                      nomeAttributo="{{datoDinamico dell'array}}
                      --}}
               <x-card studentName="{{ $student['name'] }}" 
               studentSurname="{{ $student['surname']}}" 
               studentId="{{ $student['id'] }}">
              >
               </x-card>
              </div>
              @endforeach
        </div>
    </div>
    </x-layout>