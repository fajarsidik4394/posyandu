<div class="topheader">
    <div class="left">
        <h1 class="logo"> POSYANDU </span></h1>
        
        <br clear="all" />
        
    </div><!--left-->
    
    <div class="right">
    	
    	<div class="userinfo">
        	<img src="{{ asset('user.png') }}" width="30px" />
            <span>{{ $user->name }}</span>
        </div><!--userinfo-->
        
        <div class="userinfodrop">
        	<div class="avatar">
            	<a href="#"><img src="{{ asset('user.png') }}" width="100px" /></a>
            </div><!--avatar-->
            <div class="userdata">
            	<h4>{{ $user->name }}</h4>

                {{-- <span class="email"> {{ $user->email }}</span> --}}

                <ul>
                	<li><a href="{{ route('edit_profil') }}">Edit Profile</a></li>
                    
                    <li><a href="{{ route('do-Logout') }}" title="">LOGOUT</a></li>
                </ul>
            </div><!--userdata-->
        </div><!--userinfodrop-->
    </div><!--right-->
</div><!--topheader-->