<div class=" dropdown">
    <button id="dropdownhead">
        <img src="{{asset('assets/nation/en.png')}}" class="h-15"/>
        <img src="{{asset('assets/icons/select.svg')}}" class=" m-1"/>
    </button>
    <div id="dropdownmenu" class="dropdown-content">
        <ul>
            <li class="dropdown-item">
                <img src="{{asset('assets/nation/en.png')}}" class="h-15"/> 
                <span>English</span>
            </li>
            <li class="dropdown-item">
                <img src="{{asset('assets/nation/de.png')}}" class="h-15"/>
                <span>Deutsch</span>
            </li>    
        </ul>    
    </div>
       
</div>

@push('custom-scripts')
    <script>


    </script>
@endpush