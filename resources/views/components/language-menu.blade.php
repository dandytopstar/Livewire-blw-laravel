<div class=" dropdown" id="langbtn" onclick="showLangMenu()">
  <button id="dropdownhead">
    <img src="{{asset('assets/nation/en.png')}}" class="h-15 w-30" id="selectedlang" />
    <img src="{{asset('assets/icons/select.svg')}}" class=" m-1" />
  </button>
  <div id="dropdownmenu" class="dropdown-content">
    <ul>
      <li class="dropdown-item" onclick='selectLang(this)' data-lang="en">
        <img src="{{asset('assets/nation/en.png')}}" class="h-15 w-30" />
        <span>English</span>
      </li>
      <li class="dropdown-item"  onclick='selectLang(this)' data-lang="de">
        <img src="{{asset('assets/nation/de.png')}}" class="h-15 w-30" />
        <span>Deutsch</span>
      </li>
      <li class="dropdown-item"  onclick='selectLang(this)' data-lang="fr">
        <img src="{{asset('assets/nation/fr.png')}}" class="h-15 w-30" />
        <span>Français</span>
      </li>
      <li class="dropdown-item"  onclick='selectLang(this)' data-lang="it">
        <img src="{{asset('assets/nation/it.png')}}" class="h-15 w-30" />
        <span>Italiano</span>
      </li>
      <li class="dropdown-item"  onclick='selectLang(this)' data-lang="es">
        <img src="{{asset('assets/nation/es.png')}}" class="h-15 w-30" />
        <span>Español</span>
      </li>
      <li class="dropdown-item"  onclick='selectLang(this)' data-lang="no">
        <img src="{{asset('assets/nation/no.png')}}" class="h-15 w-30" />
        <span>Norsk</span>
      </li>
      <li class="dropdown-item"  onclick='selectLang(this)' data-lang="pl">
        <img src="{{asset('assets/nation/pl.png')}}" class="h-15 w-30" />
        <span>Polskie</span>
      </li>
      <li class="dropdown-item"  onclick='selectLang(this)' data-lang="tr">
        <img src="{{asset('assets/nation/tr.png')}}" class="h-15 w-30" />
        <span>Türk</span>
      </li>
      <li class="dropdown-item"  onclick='selectLang(this)' data-lang="se">
        <img src="{{asset('assets/nation/se.png')}}" class="h-15 w-30" />
        <span>Svenska</span>
      </li>
    </ul>
  </div>

</div>

@push('custom-scripts')
<script>
    document.querySelector('#dropdownmenu').style.display='none';
    var showLangMenu= () => {
        if(document.querySelector('#dropdownmenu').style.display=="none") {
            document.querySelector('#dropdownmenu').style.display="block"
        } else {
            document.querySelector('#dropdownmenu').style.display="none"
        }
    }
    var selectLang = (e)=>{
        document.querySelector('#selectedlang').src = document.querySelector('#selectedlang').src.replace(/\w{2}.png/i,e.getAttribute('data-lang')+'.png')
            // <?php 
            // $lang = e.getAttribute('data-lang')
            // session('lang'=>$lang) ?>
        var lang = <?php  echo json_encode(session('lang'));   ?>;
        console.log(lang)
    }
</script>
@endpush


<!-- // var lang = <?php  echo json_encode(session('lang'));   ?> -->