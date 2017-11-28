<div class="container">
    <div class="header_section">
        <div class="logo"><a href="javascript:void(0)"><img src="{{ asset('assets/img/logob.png') }}" alt=""></a></div>
        @if(isset($menu))
            <nav class="nav" id="nav">
                <ul class="toggle">
                    @foreach($menu as $item)
                        <li><a href="#{{$item['alias']}}">{{$item['title']}}</a></li>
                    @endforeach </ul>
         <!--           <li><a href="#top_content">Home</a></li>
                    <li><a href="#aboutUs">About US</a></li>
                    <li><a href="#service">Services</a></li>
                    <li><a href="#Portfolio">Portfolio</a></li>
                    <li><a href="#client_outer">Clients</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul> -->
                <ul class="">
                    @foreach($menu as $item)
                    <li><a href="#{{$item['alias']}}">{{$item['title']}}</a></li>
                    @endforeach </ul>
                  <!--  <li><a href="#aboutUs">About US</a></li>
                    <li><a href="#service">Services</a></li>
                    <li><a href="#Portfolio">Portfolio</a></li>
                    <li><a href="#client_outer">Clients</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul> -->
            </nav>
        @endif

        <a class="res-nav_click animated wobble wow"  href="javascript:void(0)"><i class="fa-bars"></i></a> </div>
</div>