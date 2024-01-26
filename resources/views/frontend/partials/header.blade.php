  <section class="menu cid-s1YNw91RvB" once="menu" id="menu1-1">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg w-100">
        <div class="container">
           
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-white display-4" href="{{__('Notice')}}">
                            Notice</a></li> 
                             <!-- route('notice.show')  -->

                    <li class="nav-item"><a class="nav-link link text-white display-4" href="{{route('setup.show')}}">Company setup</a></li>

                    <select onchange="window.location.href=this.value;" name="" id="" class="form-control" style="width: min-content; margin-left:10px;">

                   <option @if(session()->get('locale')=='bn') selected @endif   value="{{route('change.lang','bn')}}">BN</option>

                   <option @if(session()->get('locale')=='en') selected @endif    value="{{route('change.lang','en')}}">EN</option>

                   <option @if(session()->get('locale')=='ar') selected @endif   value="{{route('change.lang','ar')}}">AR</option>

                   <option @if(session()->get('locale')=='fr') selected @endif   value="{{route('change.lang','fr')}}">FR</option>
                   </Select>
                    
                    <!-- <li class="nav-item"><a class="nav-link link text-white display-4" href="{{route('company.view')}}">Contacts</a></li></ul> -->
             
                    
                    
                    
                </div>
             
            </div> 
        </div>
    </nav>
</section>


