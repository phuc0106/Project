<!doctype html>
<html class="no-js" lang="">


<head>
        

		@include("front.partials.head")
      
    </head>
    <body>
     
        <!-- header start -->
        @include("front.partials.header")
        <!-- header end -->

        <main>
            @yield("content")

        </main>

        <!-- footer -->
        @include("front.partials.footer")
        <!-- footer end -->




    <!-- JS here -->
    @include("front.partials.foot")
		
    </body>

<!-- Mirrored from www.devsnews.com/template/bungee/bungee/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Dec 2022 12:41:46 GMT -->
</html>