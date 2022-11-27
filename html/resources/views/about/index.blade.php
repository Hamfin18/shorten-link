@include('header.index')

<div class="container valign-wrapper">
    <div class="row center">
        {{-- <div class="col s12 m7" style="margin-top: 80px">
          <div class="card">
            <div class="card-image">
              <img src="{{URL::asset('images/pas-foto.png')}}" class="circle">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div> --}}
            
      <div class="col s12 m12">
        <h3 class="header" style="margin-top: 5px">Developer</h3>
        <div class="card">
          <div class="card-image circle" style="width: 35%;margin:auto;">
            <img src="{{URL::asset('images/pas-foto.png')}}" >
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <p>Hi, My name is Ilham.I made this Link Shortener inspired by Bit.ly ,I hope u like it.</p>
            </div>
            <div class="card-action center">
              <a href="https://github.com/Hamfin18" style="margin: 0">My github</a>
            </div>
          </div>
        </div>
      </div>
</div>