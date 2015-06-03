<div class="top-header">
    <div class="container">
        <div class="logo">
            <a href="index.html"><img src="{{asset('images/logo.png')}}" class="img-responsive" alt="" /></a>
        </div>
        <div class="top-menu">
            <span class="menu"> </span>
            <ul>
                <li class="active"><a href="/">INICIO</a></li>
                <li><a href="#Services" class="scroll">NOSOTROS</a></li>
                <li><a href="/categoria">PRODUCTOS</a></li>
                <li><a href="#Team" class="scroll">CONTACTENOS</a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
         <!--script-nav-->
         <script>
             $("span.menu").click(function(){
                $(".top-menu ul").slideToggle("slow" , function(){
                });
             });
         </script>
         <!--script-nav-->
    </div>
</div>