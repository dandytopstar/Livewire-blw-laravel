<div class="d-flex w-100">
  <button class="font-grey-16-700 btn-gender-unsel mb-20" id='g_boy' onclick="selectGender(this)">
    {{__("front.gender_boy")}}
  </button>
  <button class="font-grey-16-700 btn-gender-unsel mb-20 ml-20" id='g_girl' onclick="selectGender(this)">
    {{__("front.gender_girl")}}
  </button>
</div>

@push('custom-scripts')
<script>
  let selectGender = (e) => {
    let genderOther;
    switch (e.id) {
        case "g_boy":
          genderOther=document.querySelector('#g_girl')
          break;
        case "g_girl":
          genderOther=document.querySelector('#g_boy')
        default:
          break;
      }
    if(e.className.indexOf('btn-gender-sel')<0 && genderOther.className.indexOf('btn-gender-sel')<0) {
      e.classList.remove('btn-gender-unsel');
      e.classList.add('btn-gender-sel');
    } else if (e.className.indexOf('btn-gender-sel')<0 && genderOther.className.indexOf('btn-gender-sel')>0) {
      e.classList.remove('btn-gender-unsel');
      genderOther.classList.remove('btn-gender-sel');
      e.classList.add('btn-gender-sel');
      genderOther.classList.add('btn-gender-unsel')
    }
  }
</script>

@endpush