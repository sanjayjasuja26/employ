<div class="row border-bottom">
 <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">

   <ul class="nav navbar-top-links navbar-right">

         <li>
             <a href="{{ url('/logout') }}"
                 onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                 Logout
             </a>

             <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                 {{ csrf_field() }}
             </form>
         </li>
     
   </ul>

</nav>
</div>
